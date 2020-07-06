<?php

/** @var Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Tag::class, function (Faker $faker) {

    return [
        'ar' => [
            'title' => $faker->word
        ],
        'en' => [
            'title' => $faker->word
        ],
        'slug' => Str::slug($faker->unique()->numberBetween(1, 20) . ' ' . $faker->title)
    ];

});
