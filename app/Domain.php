<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class Domain extends Model
{
    use Iso8601Serialization;

    protected $fillable = ['domain', 'is_verified'];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_main_url' => 'boolean',
    ];

    protected $hidden = [
        'id', 'token_id'
    ];

    protected $appends = ['mainUrl'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'domain';
    }

    public function getMainUrlAttribute()
    {
        $crawledMainUrl = $this->crawledUrls()->whereIsMainUrl(true)->get()->first();

        if ($crawledMainUrl) {
            return $crawledMainUrl->url;
        }

        return 'http://' . $this->domain;
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
     * Returns the Eloquent Relationship for App\CrawledUrl
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function crawledUrls()
    {
        return $this->hasMany(CrawledUrl::class);
    }

    /**
     * Returns the Eloquent Relationship for App\MailDomain
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailDomains()
    {
        return $this->belongsToMany(MailDomain::class, 'domain_mx', 'domain_id', 'mail_domain_id');
    }

    /**
     * Returns the Eloquent Relationship for App\SiwecosScan
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function siwecosScans()
    {
        return $this->hasMany(SiwecosScan::class);
    }

    public function delete()
    {
        $this->siwecosScans->each->delete();
        $this->crawledUrls->each->delete();
        $this->mailDomains()->detach();

        return parent::delete();
    }
}
