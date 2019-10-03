<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->sentence,
        'body'=>$faker->paragraph,
        'published_at'=>\Carbon\Carbon::now(),
//        'author_id'=>\App\User::all()->random()->id
        'author_id'=>array_random(['58','59','60'])
    ];
});
