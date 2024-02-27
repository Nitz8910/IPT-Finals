<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID'=>rand(1,100),
            'Student_Number'=> fake()->Student_Number(),
            'Full_name'=>fake()->full_name(),
            'Birthdate'=>fake()->Birthdate(),
        ];
    }
}
