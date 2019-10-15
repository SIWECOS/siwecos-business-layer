<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Keygen\Keygen;
use App\Traits\Iso8601Serialization;

class Token extends Model
{
    use Iso8601Serialization;

    protected $fillable = ['credits', 'token', 'type'];

    protected $table = 'tokens';

    public function __construct(array $attributes = [])
    {
        // Generate token by package gladcodes/keygen
        $this->token = Keygen::alphanum(42)->generate();
        $this->verification_token = Keygen::alphanum(64)->generate();

        parent::__construct($attributes);
    }

    /**
     * Returns the Eloquent Relationship for App\User
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Returns the Eloquent Relationship for App\Domain
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domains()
    {
        return $this->hasMany(Domain::class);
    }


    public function reduceCredits($amount = 1)
    {
        $this->credits -= $amount;

        return $this->save();
    }

    public function delete()
    {
        $this->domains->each(function ($domain) {
            $domain->delete();
        });

        parent::delete();
    }
}
