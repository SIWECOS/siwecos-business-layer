<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Scan extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $casts = [
        'is_finished' => 'boolean',
        'has_error' => 'boolean',
        'is_freescan' => 'boolean',
        'is_recurrent' => 'boolean',
        'score' => 'integer',
    ];

    protected $dates = [
        'started_at', 'finished_at'
    ];

    protected $guarded = ['score', 'is_finished', 'status'];

    protected $hidden = ['id', 'domain_id'];

    protected $appends = ['is_finished', 'status'];

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

    public function setResultsAttribute($results)
    {
        $this->attributes['results'] = $results;
        $this->attributes['finished_at'] = Carbon::now();
        $this->attributes['score'] = $this->calculateScore();
    }

    public function calculateScore()
    {
        $score = 0;
        $amountResults = 0;

        foreach (json_decode($this->results) as $scannerResult) {
            $score += $scannerResult->score;
            $amountResults++;
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
