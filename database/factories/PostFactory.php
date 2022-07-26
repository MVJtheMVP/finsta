<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'caption' => $this->faker->sentence(),
            'image' => $this->faker->randomElement([
                'https://placeholder.pics/svg/300/3FFF38-FF76B7/000000/Instagram',
            ]),
        ];
    }
}
