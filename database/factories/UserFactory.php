<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Provider\hy_AM\PhoneNumber;

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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(\App\GiamThi::class , function (Faker $faker){
   return [
        'ten' => $faker -> name,
        'gioi_tinh' => $faker -> boolean,
        'so_cmt' => $faker -> bankAccountNumber,
       'chuc_vu' => $faker -> title,
        'ghi_chu' => $faker -> title
   ];
});
$factory -> define(\App\PhongGiam::class,function (Faker $faker){
   return[
        'gt_id' => $faker -> randomFloat(0,1,20),
       'ten_pg' => $faker -> company,
        'so_pn' => $faker -> numberBetween(1 , 20),
       'cho_trong' => $faker -> numberBetween(15 , 20),
       'ghi_chu' => $faker -> title,
   ];
});
$factory -> define(\App\PhamNhan::class,function (Faker $faker){
   return[
       'pg_id' => $faker -> randomFloat(0,1,40),
       'ten' => $faker -> name,
       'ngay_sinh' => $faker -> date($format = 'Y-m-d', $max = 'now'),
       'gioitinh' => $faker -> boolean,
       'so_cmt' =>$faker -> creditCardNumber,
       'toi_danh' => $faker -> title,
        'ngay_vao' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'thoi_gian' => $faker -> buildingNumber,
        'trang_thai' => $faker -> titleMale,
       'ghi_chu' => $faker ->title
   ] ;
});
$factory -> define(\App\Student::class,function (Faker $faker){
    return[
        'id' => $faker -> randomFloat(0,1,40),
        'name' => $faker -> name ,
        'age' => $faker -> randomFloat(1,1,25),
        'adress' => $faker -> address,
        'telephone' => $faker -> creditCardNumber,
    ] ;
});
