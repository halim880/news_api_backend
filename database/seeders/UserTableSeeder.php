<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'first_name' => "Abdul",
            'last_name' => "Halim",
            'email' => "a.halimics@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt("password"), // password
            'remember_token' => bcrypt("remember_token"),
            'api_token'=> bin2hex(openssl_random_pseudo_bytes(30)),
            'avatar'=> 'avatar.jpg',
        ]);
        // User::factory(5)->create();
    }
}
