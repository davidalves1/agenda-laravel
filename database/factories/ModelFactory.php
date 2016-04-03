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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456'),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    $company = $faker->company;

    return [
        'cnpj' => $faker->cnpj(false),
        'company_name' => $company . ' S/A',
        'commercial_name' => $company,
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    $company = $faker->company;

    return [
        'cpf_cnpj' => $faker->cnpj(false),
        'name' => $company . ' S/A',
        'phone' => $faker->landlineNumber(false),
        'cellphone' => $faker->cellphoneNumber(false),
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text($maxNbChars = 200),
        'date_time' => date('Y-m-d H:i:s')
    ];
});
