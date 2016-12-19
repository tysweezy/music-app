<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Band::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->word,
        'start_date'    => $faker->date,
        'website'       => $faker->url,
        'still_active'  => $faker->boolean
    ];
});


$factory->define(App\Album::class, function (Faker\Generator $faker) {

    return [
        'band_id'             => rand(1,50),
        'name'                => $faker->word,
        'recorded_date'       => $faker->date,
        'release_date'        => $faker->date,
        'number_of_tracks'    => $faker->randomDigit,
        'label'               => $faker->company,
        'producer'            => $faker->name,
        'genre'               => $faker->word
    ];
});