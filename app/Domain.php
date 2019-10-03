<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Keygen\Keygen;
use Illuminate\Support\Facades\Log;
use App\Traits\Iso8601Serialization;

class Domain extends Model
{
    use Iso8601Serialization;

    protected $fillable = ['domain', 'is_verified'];

    protected $casts = [
        'is_verified' => 'boolean'
    ];

    protected $hidden = [
        'id', 'token_id'
    ];

    protected $appends = ['url'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'domain';
    }

    public function getUrlAttribute()
    {
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
     * Returns the Eloquent Relationship for App\Scan
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    public function delete()
    {
        $this->scans->each(function ($scan) {
            $scan->delete();
        });

        return parent::delete();
    }
}
