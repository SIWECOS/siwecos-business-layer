<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'salutation_id', 'first_name', 'last_name', 'address', 'plz', 'city', 'phone', 'org_name', 'org_industry', 'org_address', 'org_plz', 'org_city', 'org_phone', 'org_size_id', 'agb',
        'preferred_language',
    ];

    protected $hidden = [
        'password', 'passwordreset_token',
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * Returns the Eloquent Relationship for App\Token
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function token()
    {
        return $this->belongsTo(Token::class);
    }
}
