<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(3, true),
        'description'=>$faker->words(50, true),
        'thumb'=>$faker->imageUrl(),
    ];
});
