<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class,100)->create();
        factory(App\GiamThi::class,20)->create();
        factory(App\PhongGiam::class,40)->create();
        factory(App\PhamNhan::class,100)->create();
        // factory(App\Student::class,40)->create();
    }
}
