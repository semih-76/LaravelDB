<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->sentence(3),
            'type' => fake()->randomElement(['livre', 'dvd', 'cd', 'magazine']),
            'statut' => fake()->randomElement(['disponible', 'emprunté']),
            'emprunteur' => fake()->name(),
        ];
    }
}
