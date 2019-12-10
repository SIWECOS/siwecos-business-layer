<?php

namespace App;

use App\Jobs\StartScanJob;
use App\Traits\Iso8601Serialization;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SiwecosScan extends Model
{
    use Iso8601Serialization;

    protected $casts = [
        'is_freescan' => 'boolean',
        'is_recurrent' => 'boolean',
    ];

    protected $guarded = [];

    /**
     * Returns the calculated dangerLevel Attribute.
     *
     * @return int
     */
    public function getDangerLevelAttribute()
    {
        return $this->is_freescan ? 0 : 10;
    }

    /**
     * Calculates the overall score of all scans.
     *
     * @return int
     */
    public function getScoreAttribute()
    {
        $totalScore = 0;
        $totalWeight = 0;

        foreach ($this->getAverageScannerScores() as $scanner => $score) {
            $weight = config('siwecos.scannerWeight.' . $scanner, 1.0);
            $totalWeight += $weight;
            $totalScore +=  $weight * $score;
        }

        $totalScore = $totalWeight ? ceil($totalScore / $totalWeight) : 0;

        if ($totalScore > 20 && $this->hasCriticalScans()) {
            $totalScore = 20;
        }

        return (int) $totalScore;
    }

    public function getAverageScannerScores()
    {
        $resultScores = collect();
        foreach ($this->scans as $scan) {
            foreach ($scan->results as $result) {
                $resultScores->push(['name' => $result['name'], 'score' => $result['score']]);
            }
        }

        return $resultScores->groupBy('name')->map(function ($scanner) {
            return $scanner->avg('score');
        });
    }

    public function hasCriticalScans()
    {
        foreach ($this->scans as $scan) {
            if ($scan->hasCritical()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns the status if the scan is finished.
     *
     * @return bool
     */
    public function getIsFinishedAttribute()
    {
        if ($this->scans->count() === 0) {
            return false;
        }

        foreach ($this->scans as $scan) {
            if ($scan->is_finished === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * Returns the earliest started_at attribute of all Scans
     *
     * @return Carbon
     */
    public function getStartedAtAttribute()
    {
        return $this->scans->min('started_at');
    }

    /**
     * Returns the latest finished_at attribute of all Scans
     *
     * @return Carbon
     */
    public function getFinishedAtAttribute()
    {
        return $this->scans->max('finished_at');
    }

    /**
     * Returns the actual status
     *
     * @return string
     */
    public function getStatusAttribute()
    {
        if ($this->isFailed) {
            return 'failed';
        }

        if ($this->isFinished) {
            return 'finished';
        }

        if ($this->started_at)
            return 'running';

        return 'created';
    }

    /**
     * Determines if the SiwecosScan has one or more failed Scan
     *
     * @return boolean
     */
    public function getIsFailedAttribute()
    {
        foreach ($this->scans as $scan) {
            if ($scan->status === 'failed') {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns the Eloquent Relationship for App\Domain
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Returns the Eloquent Relationship for App\Scans
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function scans()
    {
        return $this->belongsToMany(Scan::class)->withTimestamps();
    }

    /**
     * Dispatches needed Scans for SIWECOS v3
     *
     * @return void
     */
    public function dispatchScanJobs()
    {
        if ($this->is_freescan) {
            $scan = $this->scans()->create(['url' => $this->domain->mainUrl]);
            StartScanJob::dispatch($scan, 0, ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'TLS']);
        } else {
            $scan = $this->scans()->create(['url' => $this->domain->mainUrl]);
            StartScanJob::dispatch($scan, 10, ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'PORT', 'TLS', 'VERSION']);

            foreach ($this->domain->crawledUrls()->whereIsMainUrl(false)->get() as $crawledUrl) {
                $scan = $this->scans()->create(['url' => $crawledUrl->url]);
                StartScanJob::dispatch($scan, 10, ['DOMXSS', 'HEADER', 'INFOLEAK']);
            }

            foreach ($this->domain->mailDomains as $mailDomain) {
                $latestScan = $mailDomain->latestScan;
                if ($latestScan && !$latestScan->has_error && $latestScan->created_at->gte(now()->subWeek())) {
                    $this->scans()->syncWithoutDetaching($latestScan);
                } else {
                    $scan = $this->scans()->create(['url' => $mailDomain->domain]);
                    StartScanJob::dispatch($scan, 0, ['INI_S', 'PORT', 'IMAP_TLS', 'IMAPS_TLS', 'POP3_TLS', 'POP3S_TLS', 'SMTP_TLS', 'SMTPS_TLS', 'SMTP_MSA_TLS']);
                }
            }
        }
    }

    /**
     * Deletes the model and all associated scans.
     *
     * @return bool|null
     */
    public function delete()
    {
        $this->scans->each(function ($scan) {
            if (count($scan->siwecosScans) == 1) {
                $scan->siwecosScans()->detach([$this->id]);
                $scan->delete();
            } else {
                $scan->siwecosScans()->detach([$this->id]);
            }
        });

        return parent::delete();
    }
}
