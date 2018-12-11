<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'salutation_id', 'first_name', 'last_name', 'address', 'plz', 'city', 'phone', 'org_name', 'org_industry', 'org_address', 'org_plz', 'org_city', 'org_phone', 'acl_id', 'org_size_id', 'agb',
        'preferred_language',
    ];

    protected $hidden = [
        'password', 'passwordreset_token',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public static function getTokenByString($userToken)
    {
        $tokenUser = self::where('token', $userToken)->first();

        return $tokenUser;
    }
}
