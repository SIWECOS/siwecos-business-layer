<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Keygen\Keygen;

class Token extends Model
{
    protected $fillable = ['credits', 'token', 'type'];

    protected $table = 'tokens';

    public function __construct(array $attributes = [])
    {
        // Generate token by package gladcodes/keygen
        $this->token = Keygen::token(24)->generate();

        parent::__construct($attributes);
    }

    /**
     * @param int $credits
     *
     * @return bool
     */
    public function setTokenCredits(int $credits)
    {
        $this->credits = $credits;

        return $this->save();
    }


    public function reduceCredits($amount = 1)
    {
        $this->credits -= $amount;

        return $this->save();
    }

    public static function reduceToken(string $token, $amount = 1)
    {
        $token = self::getTokenByString($token);
        if ($token instanceof self) {
            $token->credits -= $amount;

            try {
                $token->save();

                return true;
            } catch (\Illuminate\Database\QueryException $queryException) {
                //TODO Log error to Papertrail with Token
                return false;
            }
        }
    }

    public static function getTokenByString(string $token)
    {
        return self::whereToken($token)->first();
    }
}
