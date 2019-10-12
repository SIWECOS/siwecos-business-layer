<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class Scan extends Model
{
    use Iso8601Serialization;

    protected $casts = [
        'is_finished' => 'boolean',
        'has_error' => 'boolean',
        'score' => 'integer',
        'results' => 'collection',
    ];

    protected $dates = [
        'started_at', 'finished_at'
    ];

    protected $guarded = ['score', 'is_finished', 'status', 'results'];

    protected $hidden = ['id'];

    protected $appends = ['is_finished', 'status'];


    protected static function boot()
    {
        parent::boot();

        static::updating(function ($scan) {
            // if scan is finished by this update
            if (collect($scan->results)->isNotEmpty() && $scan->finished_at === null) {
                $scan->score = $scan->calculateScore();
                $scan->finished_at = now();
            }
        });
    }

    /**
     * Returns the status if the scan is finished.
     *
     * @return bool
     */
    public function getIsFinishedAttribute()
    {
        return $this->finished_at !== null;
    }

    public function getStatusAttribute()
    {
        if (($this->is_finished && $this->started_at === null) || (!$this->is_finished && $this->has_error))
            return 'failed';
        if ($this->is_finished && $this->results !== null)
            return 'finished';
        if ($this->started_at)
            return 'running';

        return 'created';
    }


    public function calculateScore()
    {
        $hasCritical = false;
        $score = 0;
        $totalScannerWeight = 0;

        foreach ($this->results as $result) {
            $result = collect($result)->recursive();

            $scannerWeight = config('siwecos.scanner_weight.' . $result->get('name'), 1);
            $score += $result->get('score') * $scannerWeight;
            $totalScannerWeight += $scannerWeight;

            if ($result->get('tests') && $result->get('tests')->contains('scoreType', 'critical')) {
                $hasCritical = true;
            };
        }

        $score = $totalScannerWeight ? ceil($score / $totalScannerWeight) : 0;

        if ($score > 20 && $hasCritical) {
            $score = 20;
        }

        return $score;
    }

    /**
     * Returns the Eloquent Relationship for App\SiwecosScan
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siwecosScan()
    {
        return $this->belongsTo(SiwecosScan::class);
    }
}
