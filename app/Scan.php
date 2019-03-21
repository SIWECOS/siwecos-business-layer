<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $casts = [
        'is_finished' => 'boolean',
        'has_error' => 'boolean',
        'score' => 'integer',
    ];

    protected $guarded = ['score'];

    /**
     * Returns the status if the scan is finished.
     *
     * @return bool
     */
    public function getIsFinishedAttribute()
    {
        return $this->results ? true : false;
    }

    public function setResultsAttribute($results)
    {
        $this->attributes['results'] = $results;
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
