<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\Model;
use Faker\Generator as Faker;



$factory->define(Model::class, function (Faker $faker) {
    return [
        'member_id'=>function(){
            return factory(Member::class)->create()->id;
        },
        'date'=>$faker->date(),
        'premium'=>random_int(1,999),
        'admistration'=>random_int(1,999),
        'fine'=>random_int(1,999),
        'profit'=>random_int(1,999),
        'investment_withdraw'=>random_int(1,999),
        'total_credit'=>random_int(99,9999),
    ];
});
