<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Decant>
 */
class DecantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'scent_accords' => $this->faker->word,
            'top_note' => $this->faker->word,
            'base_note' => $this->faker->word,
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Unisex']),
            'brand_category' => $this->faker->word,
            'country' => $this->faker->country,
            'brand_id' => Brand::factory(),
            'img_url' => $this->faker->imageUrl()
        ];
    }
}
