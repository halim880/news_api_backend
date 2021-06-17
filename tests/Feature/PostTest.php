<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PostTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_be_post_store(){
        $this->withoutExceptionHandling();
        $data = [
                'title'=> 'this is a title',
                'content'=> 'this is the content',
                'post_type'=> "image",
                'user_id'=> 1,
                'category_id'=> 1,
                'image'=> UploadedFile::fake()->image('image.jpg'),
            ];

        $response = $this->post('category/store', $data);
        $post = Post::first();
        $this->assertFileExists(Post::getImageDirectory()."/".$post->image);
        $post->removeImage();
        $this->assertFileDoesNotExist(Post::getImageDirectory()."/".$post->image);
        $response->assertStatus(200);
    }
}
