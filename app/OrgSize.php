<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\OrgSize
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrgSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrgSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrgSize whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrgSize whereValue($value)
 */
class OrgSize extends Authenticatable
{
    protected $table = 'org_size';

}
