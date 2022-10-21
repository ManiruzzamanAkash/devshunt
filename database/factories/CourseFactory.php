<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'       => ucfirst(fake()->words(10, true)),
            'slug'        => fake()->unique()->slug(10),
            'category_id' => fake()->randomElement(['1', '2', '3', '4', '5', '6', '7']),
            'is_free'     => fake()->randomElement(['0', '1']),
            'price'       => fake()->randomFloat(2, 10, 1000),
            'banner'      => fake()->randomElement(['course1.png', 'course2.png', 'course2.png']),
            'description' => fake()->text(2000),
            'created_by'  => 1,
            'start_date'  => fake()->date(),
            'end_date'    => fake()->date(),
            'status'      => 1,
        ];
    }
}
