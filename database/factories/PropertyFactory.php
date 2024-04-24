<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PropertyFactory extends Factory
{
  
   
    public function definition(): array
    {
        return [
            'address' => fake()->name(),
            'description' => fake()->sentence(),
            'price' => rand(1000, 100000),
            'status' => $this->faker->randomElement(['Available', 'Sold', 'Under Contract']),
        ];
    }
}
