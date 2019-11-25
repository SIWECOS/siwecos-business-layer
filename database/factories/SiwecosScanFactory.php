<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiwecosScan;
use Faker\Generator as Faker;

$factory->define(SiwecosScan::class, function (Faker $faker) {
    return [
        'is_freescan' => false,
        'is_recurrent' => false
    ];
});
