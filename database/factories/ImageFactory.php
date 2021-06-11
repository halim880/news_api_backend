<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=> $this->faker->sentence,
            'url'=> $this->faker->imageUrl(100, 100),
            'post_id'=> rand(1, 10),
            'featured'=> $this->faker->randomElement([true, false]),
        ];
    }
}
