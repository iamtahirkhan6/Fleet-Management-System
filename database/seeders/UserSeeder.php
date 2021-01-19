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
        $user = new User();
        $user->name = "Tahir Khan";
        $user->phone_number = "8770923395";
        $user->password = Hash::make("Qwerty123");
        $user->save();
        $user->attachRole("admin");

        $user = new User();
        $user->name = "Anil Tripathy";
        $user->phone_number = "9920238105";
        $user->password = Hash::make("Qwerty123x");
        $user->save();
        $user->attachRole("manager");

        $user = new User();
        $user->name = "Khalid Khan";
        $user->phone_number = "9937013057";
        $user->password = Hash::make("Qwerty1234x");
        $user->save();
        $user->attachRole("manager");
    }
}
