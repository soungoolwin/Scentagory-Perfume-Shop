<?php

namespace Database\Factories;

use App\Models\Decant;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'decant_id' => Decant::factory(),
            'size_id' => Size::factory(),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
