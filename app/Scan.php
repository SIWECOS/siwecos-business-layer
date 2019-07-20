<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class Scan extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    use Iso8601Serialization;

    protected $casts = [
        'is_finished' => 'boolean',
        'has_error' => 'boolean',
        'is_freescan' => 'boolean',
        'is_recurrent' => 'boolean',
        'score' => 'integer',
        'results' => 'collection',
    ];

    protected $dates = [
        'started_at', 'finished_at'
    ];

    protected $guarded = ['score', 'is_finished', 'status', 'results'];

    protected $hidden = ['id', 'domain_id'];

    protected $appends = ['is_finished', 'status'];


    protected static function boot()
    {
        parent::boot();

        static::updating(function ($scan) {
            // if scan ist finished by this update
            if ($scan->results !== null && $scan->finished_at === null) {
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
        if ($this->has_error)
            return 'failed';
        if ($this->is_finished)
            return 'finished';
        if ($this->started_at)
            return 'running';

        return 'created';
    }

    public function getDangerLevelAttribute()
    {
        return $this->is_freescan ? 0 : 10;
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
     * Returns the Eloquent Relationship for App\Domain
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Returns the Eloquent Relationship for App\Token
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function token()
    {
        return $this->belongsToThrough(Token::class, Domain::class);
    }
}
