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
            
            'user_id' => 1,
            'judul' => $this->faker->sentence(mt_rand(2,4)),
            'slug'  => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(1,2)),
            'body'  => $this->faker->paragraph(mt_rand(3,5)),
            'image' => $this->faker->sentence(mt_rand(2,4))
        ];
    }
}
