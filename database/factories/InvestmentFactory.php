<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Investment;
use App\Model;
use Faker\Generator as Faker;


$factory->define(Investment::class, function (Faker $faker) {
    return [
        'status'=>random_int(0,1),
        'purpose'=>$faker->word,
        'details'=>$faker->sentence,
        'amount'=>random_int(9999,999999),
    ];
});
