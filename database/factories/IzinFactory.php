<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Izin>
 */
class IzinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categoryizin_id' => mt_rand(1,2),
            'namaizin' => $this->faker->sentence(mt_rand(2,4)),
            'slug'  => $this->faker->slug()
        ];
    }
}
