<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Keygen\Keygen;
use Illuminate\Support\Facades\Log;

class Domain extends Model
{
    protected $fillable = ['url', 'verification_token', 'is_verified'];

    protected $casts = [
        'is_verified' => 'boolean'
    ];

    protected $hidden = [
        'id', 'token_id'
    ];

    protected $appends = ['domain'];

    public function __construct(array $attributes = [])
    {
        $this->verification_token = Keygen::alphanum(64)->generate();

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

    /**
     * Returns the Eloquent Relationship for App\Scan
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    /**
     * Returns the hostname for this domain's url
     *
     * @return string
     */
    public function getDomainAttribute()
    {
        return $this->attributes['domain'] = parse_url($this->url, PHP_URL_HOST);
    }

    /**
     * Returns the scheme for this domain's url
     *
     * @return string
     */
    public function getSchemeAttribute()
    {
        return parse_url($this->url, PHP_URL_SCHEME);
    }

    /**
     * Returns boolean if the URL is secure (HTTPS)
     *
     * @return boolean
     */
    public function getIsSecureAttribute()
    {
        return ($this->scheme === 'https');
    }

    public function delete()
    {
        $this->scans->each(function ($scan) {
            $scan->delete();
        });

        return parent::delete();
    }
}
