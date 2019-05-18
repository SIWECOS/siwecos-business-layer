<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Events\ScanUpdating;

class Scan extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $casts = [
        'is_finished' => 'boolean',
        'has_error' => 'boolean',
        'is_freescan' => 'boolean',
        'is_recurrent' => 'boolean',
        'score' => 'integer',
        'results' => 'array',
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
        $score = 0;
        $amountResults = 0;

        foreach ($this->results as $scannerResult) {
            if ($scannerResult['score'] !== null) {
                $score += $scannerResult['score'];
                $amountResults++;
            }
        }

        return $amountResults ? ceil($score / $amountResults) : 0;
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
