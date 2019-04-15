<?php

use Faker\Generator as Faker;
use App\Token;

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
        'email'        => $faker->email,
        'password'     => $password ?: $password = bcrypt('secret'),

        'is_active'       => false,
        'token_id'     => function () {
            return factory(Token::class)->create()->id;
        },

        'org_size'     => $faker->randomNumber(2),
    ];
});
