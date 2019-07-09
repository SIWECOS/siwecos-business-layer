<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Keygen\Keygen;
use Illuminate\Support\Facades\Log;

class Domain extends Model
{
    protected $fillable = ['domain', 'urls', 'verification_token', 'is_verified'];

    protected $casts = [
        'is_verified' => 'boolean',
        'urls' => 'collection',
    ];

    protected $hidden = [
        'id', 'token_id'
    ];

    protected $appends = ['mainUrl'];

    public function __construct(array $attributes = [])
    {
        $this->verification_token = Keygen::alphanum(64)->generate();

        parent::__construct($attributes);
    }

    public function getMainUrlAttribute()
    {
        return 'https://' . $this->domain;
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
