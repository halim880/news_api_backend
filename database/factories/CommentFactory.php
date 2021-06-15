<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body'=> $this->faker->sentence(rand(5, 20)),
            'post_id'=> $this->postId(),
            'user_id'=> $this->userId(),
        ];
    }

    private function userId(){
        return User::get()->random()->id;
    }

    private function postId(){
        return Post::get()->random()->id;
    }
}
