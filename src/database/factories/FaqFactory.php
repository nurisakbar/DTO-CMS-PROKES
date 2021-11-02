<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faq;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;

$factory->define(Faq::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $slug = Str::slug($title);

    return [
        'title'         =>  $title,
        'slug'          =>  $slug,
        'category_id'   =>  rand(1, 6),
        'content'       =>  $faker->paragraph($nbSentences = 60, $variableNbSentences = true)
    ];
});
