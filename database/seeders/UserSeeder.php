<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user               = new User();
        $user->name         = "Tahir Khan";
        $user->phone_number = "9999999999";
        $user->password     = Hash::make("Qwerty123");
        $user->save();
        $user->attachRole("admin");

        $user               = new User();
        $user->name         = "Nasir Khan";
        $user->phone_number = "9999999990";
        $user->password     = Hash::make("password");
        $user->save();
        $user->attachRole("manager");
    }
}
