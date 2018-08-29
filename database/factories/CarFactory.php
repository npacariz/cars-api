<?php

use Faker\Generator as Faker;
use App\Car;
$factory->define(Car::class, function (Faker $faker) {
    return [
          
            'brand' => $faker->words($nb = 1, $asText = true),
            'model'=> $faker->words($nb = 1, $asText = true),       
            'year' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'maxSpeed' => $faker->biasedNumberBetween($min = 10, $max = 20),
            'isAutomatic' =>  $faker->boolean,
            'engine' => $faker->randomElement($array = ['diesel','petrol','electric']),
            'numberOfDoors' => 4
      
    ];
});
