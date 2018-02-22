<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\Salutation
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salutation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salutation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salutation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salutation whereValue($value)
 */
class Salutation extends Authenticatable
{
       protected $table = 'salutation';

}
