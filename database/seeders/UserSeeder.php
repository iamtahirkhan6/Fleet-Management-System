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
        $user->password = Hash::make("Rajcooler.123");
        $user->save();
    }
}
