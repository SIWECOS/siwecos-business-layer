<?php

use Faker\Generator as Faker;

$factory->define(App\Domain::class, function (Faker $faker) {
    return [
        'domain' => 'example.org'
    ];
});
