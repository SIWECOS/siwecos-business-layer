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
        return $this->scans->avg('score');
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
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    /**
     * Dispatches needed Scans for SIWECOS v3
     *
     * @return void
     */
    public function dispatchScanJobs()
    {
        if ($this->is_freescan) {
            StartScanJob::dispatch($this, $this->domain->mainUrl, ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'TLS']);
        } else {
            StartScanJob::dispatch($this, $this->domain->mainUrl, ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'PORT', 'TLS', 'VERSION']);

            foreach ($this->domain->crawledUrls as $url) {
                StartScanJob::dispatch($this, $url, ['DOMXSS', 'HEADER', 'INFOLEAK']);
            }

            foreach ($this->domain->mailDomains as $mailDomain) {
                StartScanJob::dispatch($this, $mailDomain, ['IMAP', 'IMAPS', 'POP3', 'POP3S', 'SMTP', 'SMTPS']);
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
            $scan->delete();
        });

        return parent::delete();
    }
}
