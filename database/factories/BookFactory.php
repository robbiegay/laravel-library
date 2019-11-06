<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [

        'isbn' => $faker->randomDigit,
        'title' => $faker->text($maxNbChars = 25),
        'author' => $faker->name,
        'keywords' => $faker->text($maxNbChars = 25),
        'blurb' => $faker->text($maxNbChars = 25),
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'media_type' => 'book',
    ];
});
