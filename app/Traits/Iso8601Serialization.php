<?php

namespace App\Traits;

use Illuminate\Support\Carbon;
use DateTimeInterface;

/**
 * Extends an Eloquent Model to use the ISO 8601 Format for Dates
 */
trait Iso8601Serialization
{
    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return Carbon::instance($date)->toIso8601ZuluString();
    }
}
