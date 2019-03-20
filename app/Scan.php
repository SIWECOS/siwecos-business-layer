<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;


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
