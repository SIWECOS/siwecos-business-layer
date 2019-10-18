<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class CrawledUrl extends Model
{
    use Iso8601Serialization;

    protected $guarded = [];

    protected $casts = [
        'is_main_url' => 'boolean'
    ];

    /**
     * Returns the Eloquent Relationship for App\Domain
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
