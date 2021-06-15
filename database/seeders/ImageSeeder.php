<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();

        $posts = Post::all();

        foreach ($posts as $post) {
            Image::factory(rand(1,3))->for($post)->create();
        }
    }
}
