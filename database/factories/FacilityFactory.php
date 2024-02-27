<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID' =>rand(1,100),
            'Floore'=> fake()->floor(),
            'Room_Number'=>rand(1,100),
            'Name'=>fake()->name(),
        ];
    }
}
