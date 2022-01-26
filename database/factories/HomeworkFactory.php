<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url(),
            'grade' => $this->faker->numberBetween(1, 10),
            'grade_details' => $this->faker->text()
        ];
    }
}
