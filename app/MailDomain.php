<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class MailDomain extends Model
{
    use Iso8601Serialization;

    protected $guarded = [];

    /**
     * Returns the Eloquent Relationship for App\Domain
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function domains()
    {
        return $this->belongsToMany(Domain::class, 'domain_mx', 'mail_domain_id', 'domain_id');
    }

    public function getLatestScanAttribute()
    {
        return Scan::whereUrl($this->domain)->latest()->first();
    }
}
