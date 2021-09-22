<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chart;
use Faker\Generator as Faker;

$factory->define(Chart::class, function (Faker $faker) {
   
        return [
            "month"          =>  $faker->word,
            "kWh"            =>   $faker->numberBetween(1,12),
            "totalamount"                =>  $faker->numberBetween(1, 12),
        ];
});
