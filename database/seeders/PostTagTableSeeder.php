<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->truncate();

        $posts = Post::all();
        $tags = Tag::all();

        foreach ($posts as $post) {
            for($i=0; $i<rand(1, 3); $i++){
                DB::table('post_tag')->insert([
                    "post_id"=> $post->id,
                    "tag_id"=> $tags[$i]->id,
                ]);
            }
        }
    }
}
