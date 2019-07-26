<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Iso8601Serialization;

class MailDomains extends Model
{
    use Iso8601Serialization;

    protected $guarded = [];
}
