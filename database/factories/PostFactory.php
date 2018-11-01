<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->firstName(),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
