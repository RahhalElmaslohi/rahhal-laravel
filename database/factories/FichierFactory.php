<?php

namespace Database\Factories;

use App\Models\Etudient;
use Illuminate\Database\Eloquent\Factories\Factory;

class FichierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'title_fr' => $this->faker->name(),
            'path' => $this->faker->name(),
            'etudients_id' => Etudient::factory()
        ];
    }
}
