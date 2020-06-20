<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
//    $date_time = $faker->date. '' .$faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => time(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'email_verified_at' => now(),
        'activated' => true,
        'remember_token' => '1234554321',
    ];
});


//public function str_rand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
//{
//    if (!is_int($length) || $length < 0) {
//        return false;
//    }
//
//    $string = '';
//    for ($i = $length; $i > 0; $i--) {
//        $string .= $char[mt_rand(0, strlen($char) - 1)];
//    }
//
//    return $string;
//}
