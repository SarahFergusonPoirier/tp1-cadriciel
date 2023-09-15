<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomEtudiant' => $this->faker->name, 
            'adresse' => $this->faker->address, 
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique->safeEmail,
            'naissance' => $this->faker->date, 
            'ville_id' => Ville::factory()
        ];
    }
}
