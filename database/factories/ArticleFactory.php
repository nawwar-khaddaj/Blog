<?php

/** @var Factory $factory */

use App\Models\Admin;
use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {

    return [
        'ar' => [
            'title' => $faker->title,
            'body' => $faker->paragraph
        ],
        'en' => [
            'title' => $faker->title,
            'body' => $faker->paragraph
        ],
        'slug' => Str::slug($faker->unique()->numberBetween(1, 20) . ' ' . $faker->title),
        'is_published' =>  1,
        'admin_id' => Admin::all()->random()->id,
        'images'=> [$faker->image('public/storage/articles',640,480, null, false)],

    ];

});
