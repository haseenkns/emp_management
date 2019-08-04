<?php

use Illuminate\Database\Seeder;
use App\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "name"=>"haseen",
            "email"=>"haseenkns@gmail.com",
            "password"=>bcrypt('123456')
        ]);
    }
}
