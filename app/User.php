<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $plz
 * @property string $city
 * @property string $phone
 * @property string $token
 * @property int $acl_id
 * @property int $salutation_id
 * @property int $org_id
 * @property int $agb
 * @property int $active
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAclId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAgb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePlz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSalutationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $org_name
 * @property string $org_industry
 * @property string $org_address
 * @property string $org_plz
 * @property string $org_city
 * @property string $org_phone
 * @property int $org_size_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgIndustry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgPlz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrgSizeId($value)
 * @property string $password
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @property string|null $activation_key
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereActivationKey($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'salutation_id', 'first_name', 'password', 'last_name', 'address', 'plz', 'city', 'phone', 'token', 'org_name', 'org_industry', 'org_address', 'org_plz', 'org_city', 'org_phone', 'acl_id', 'org_size_id'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public static function getTokenByString($userToken)
    {
        $tokenUser = User::where('token', $userToken)->first();
        return $tokenUser;
    }
}
