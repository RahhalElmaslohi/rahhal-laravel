<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'villes_id' => Ville::factory(),
            'users_id' => User::factory(),

        ];
    }
}
