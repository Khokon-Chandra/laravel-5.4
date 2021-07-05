<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Investment;
use App\Model;
use Faker\Generator as Faker;


$factory->define(Investment::class, function (Faker $faker) {
    $purpose = ['cash_in','cash_out'];
    return [
        'status'=>random_int(0,1),
        'purpose'=>$purpose[random_int(0,1)],
        'details'=>$faker->sentence,
        'amount'=>random_int(9999,999999),
    ];
});
