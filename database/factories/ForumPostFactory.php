<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => User::factory(),
            'title' => $this->faker->text(10),
            'title_fr' => $this->faker->text(10),
            'body' => $this->faker->text(100),
            'body_fr' => $this->faker->text(100),
            'date' => $this->faker->date()
        ];
    }
}
