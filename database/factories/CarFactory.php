<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {

    $engine = collect([
        'petrol', 'diesel', 'electric', 'gas'
    ]);

    return [
        'brand' => $faker->text(20), 
        'model'=> $faker->text(20), 
        'year' => $faker->numberBetween(1940, 2019), 
        'maxSpeed​' => $faker->numberBetween(20, 250), 
        'isAutomatic' => $faker->boolean, 
        'engine' => $engine->random(), 
        'numberOfDoors' => $faker->numberBetween(3, 5)
    ];
});




