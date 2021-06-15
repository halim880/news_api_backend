<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=> $this->faker->sentence,
            "content"=> $this->faker->paragraph,
            'post_type'=> $this->faker->randomElement(['image']),
            'user_id'=> $this->userId(),
            'category_id'=> $this->categoryId(),
        ];
    }

    private function userId(){
        return User::get()->random()->id;
    }

    private function categoryId(){
        return User::get()->random()->id;
    }
}
