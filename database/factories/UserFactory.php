<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'first_name'   => $faker->firstNameFemale,
        'last_name'    => $faker->lastName,
        'email'        => $faker->email,
        'password'     => $password ?: $password = bcrypt('secret'),
        'address'      => $faker->streetAddress,
        'plz'          => $faker->randomNumber(5),
        'city'         => $faker->city,
        'phone'        => $faker->phoneNumber,

        'active'       => false,

        'org_name'     => $faker->company,
        'org_address'  => $faker->streetAddress,
        'org_plz'      => $faker->randomNumber(5),
        'org_industry' => 'IT',
        'org_phone'    => $faker->phoneNumber,
        'org_city'     => $faker->city,

        'org_size_id'  => 1,
        'salutation_id' => 1,
    ];
});
