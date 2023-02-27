<?php

namespace Database\Factories;

use App\Models\Etudient;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etudients_id' => Etudient::factory(),
            'titre' => $this->faker->text(40),
            'titre_fr' => $this->faker->text(40),
            'body' => $this->faker->text(130),
            'body_fr' => $this->faker->text(130),
            'date' => $this->faker->date()

        ];
    }
}
