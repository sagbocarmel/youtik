<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'body' => $facker->paragraph(rand(8, 15)),
        'created_at' => $faker ->dateTimeThisYear(),
    ];
});
