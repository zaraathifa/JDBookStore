<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            // 'bookName' => $this->faker->sentence(mt_rand(3,6)),
            // 'category_id' => mt_rand(1,300),
            // 'author_id' => mt_rand(1,100),
            // 'rating' => $this->faker->numberBetween(1, 10),
            // 'voters' => $this->faker->numberBetween()

            'bookName' => $this->faker->sentence(mt_rand(3,6)),
            'category_id' => mt_rand(1,20),
            'author_id' => mt_rand(1,50),
            'rating' => $this->faker->numberBetween(1, 10),
            'voters' => $this->faker->numberBetween()
        ];
    }
}
