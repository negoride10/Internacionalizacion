<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Campus principal',
            'city' => 'Madrid',
            'university_id' => 1,
        ];
    }
}
