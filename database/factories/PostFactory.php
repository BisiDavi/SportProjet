<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'post' => $faker->text(100),
        'post_image' => $faker->image()
    ];
});
