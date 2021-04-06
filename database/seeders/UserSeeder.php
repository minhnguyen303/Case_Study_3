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
        $user->name = "Admin";
        $user->phone = "0123456789";
        $user->email = "Admin@gmail.com";
        $user->password = Hash::make('password');
        $user->address = "Admin Address";
        $user->save();
        $user->roles()->attach(1);
    }
}
