<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = ['url'];


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
     * Returns the hostname for this domain's url
     *
     * @return string
     */
    public function getHostnameAttribute()
    {
        return parse_url($this->url, PHP_URL_HOST);
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
}
