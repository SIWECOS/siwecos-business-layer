<?php

use Faker\Generator as Faker;
use Keygen\Keygen;

$factory->define(App\Token::class, function (Faker $faker) {
    return [
        'type' => 'regular',
        'token' => Keygen::token(24)->generate(),
        'credits' => 50
    ];
});
