<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'content' => $faker->text,
        'blog_id' => $faker->randomNumber(1, 100),
        'user_id' => 1,
    ];
});
