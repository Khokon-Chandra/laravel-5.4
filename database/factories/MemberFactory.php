<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\Model;
use Faker\Generator as Faker;

           

$factory->define(Member::class, function (Faker $faker) {
    return [
        'user_id'=>function () {
            return factory(App\User::class)->create()->id;
        },
        'name'=>$faker->name,
        'gender'=>random_int(1,2),
        'dob'=>$faker->date(),
        'father'=>$faker->name,
        'mother'=>$faker->name('female'),
        'nid'=>$faker->buildingNumber,
        'phone'=>$faker->phoneNumber,
        'present_addr'=>$faker->address,
        'permanent_addr'=>$faker->streetAddress,
        'photo'=>$faker->imageUrl(200,200),
    ];
});
