<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Newtask;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NewtaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'         => fake()->name(),
            'title'        => fake()->sentence(),
            'description' => fake()->sentence(),
            'content'      => fake()->paragraph(2),
            'done'         => fake()->boolean(),
        ];

    }
}
