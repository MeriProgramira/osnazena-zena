<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'admin' ,
            'email' => 'admin@osnazenazena.com' ,
            'user_name' => 'Osnazena admin' ,
            'password' => Hash::make('12345678') ,
            'role' => 'admin',
        ]);
    }
}
