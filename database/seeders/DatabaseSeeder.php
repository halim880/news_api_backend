<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            PostTableSeeder::class,
            CategoryTableSeeder::class,
            CommentTableSeeder::class,
            ImageSeeder::class,
            PostTableSeeder::class,
            PostTagTableSeeder::class,
            TagSeeder::class,
            VideoTableSeeder::class,
        ]);
    }
}
