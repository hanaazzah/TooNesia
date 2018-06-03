<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Services\Categories\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Services\Comics\Comic::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->paragraph,
        'image' => $faker->image('public/images/comics', 400,300),
        'category_id' => App\Services\Categories\Category::all()->random()->id
    ];
});

$factory->define(App\Services\Seasons\Season::class, function (Faker $faker) {
    return [
        'season_name' => $faker->sentence,
        'cover_image' => $faker->image('public/images/seasons', 400,300),
        'file_comic' => $faker->imageUrl,
        'comic_id' => App\Services\Comics\Comic::all()->random()->id
    ];
});
