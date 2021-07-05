<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CashOut;
use App\Member;
use App\Model;
use Faker\Generator as Faker;



$factory->define(CashOut::class, function (Faker $faker) {
    return [
        'member_id'=>function(){
            return factory(Member::class)->create()->id;
        },
        'date'=>now(),
        'admistration'=> random_int(99,99999),
        'entertainment'=> random_int(99,99999),
        'investment_withdraw'=>random_int(333,9999),
        'others'=> random_int(99,99999),
        'total_debit'=> random_int(99,99999),
    ];
});
