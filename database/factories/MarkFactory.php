<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mark>
 */
class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'rank'=> fake()->numberBetween([1,193]),
            'rollno'=>fake()->numberBetween(1,100),
            'category_id'=> 1,
            'remark' => fake()->word()
        ];
    }
}
