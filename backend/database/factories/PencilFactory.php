<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pencil>
 */
class PencilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pavadinimas' => fake()->sentence(2),
            'aprašymas'	=> fake()->sentence(rand(25,50)),
            'kiekis_sandely' => rand(0, 100),
            'kaina' => rand(0, 1000).'.'.rand(0, 99),
            'foto_nuoroda' => 'https://picsum.photos/768/768/?q='.rand(0, 5000),
        ];
    }
}
