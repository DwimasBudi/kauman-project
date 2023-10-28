<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => mt_rand(1, 99),
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'comment' => $this->faker->realText(180),
        ];
    }
}
