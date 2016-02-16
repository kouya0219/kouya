<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
//ユーザー
$factory->define(App\Users::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('ja_JP');

    return [
        'name'           => $faker->name,
        'email'          => md5(microtime()) . $faker->unique()->email,
        'password'       => bcrypt('ABCD1234'),
        'role'           => 'editor',
        'remember_token' => str_random(10),
        'created_at'     => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
        'updated_at'     => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
    ];
});

//記事
$factory->define(App\Reports::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('ja_JP');
    return [
        'user_id'           => $faker->numberBetween(1, 30),
        'title'             => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'contents'          => $faker->text($maxNbChars = 200)  ,
        'created_by'        => $faker->numberBetween(1, 30),
        'created_at'        => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
        'updated_at'        => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
    ];
});

//コメント

$factory->define(App\Comments::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('ja_JP');
    return [
        'report_id'        => $faker->numberBetween(1, 30),
        'contents'          => $faker->text($maxNbChars = 200)  ,
        'created_by'        => $faker->numberBetween(1, 30),
        'created_at'        => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
        'updated_at'        => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now'),
    ];
});
