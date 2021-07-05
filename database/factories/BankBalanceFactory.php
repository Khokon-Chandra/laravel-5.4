<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BankBalance;
use App\Model;
use Faker\Generator as Faker;

$factory->define(BankBalance::class, function (Faker $faker) {
    return [
        'total_amount'=>random_int(99,999999),
    ];
});
