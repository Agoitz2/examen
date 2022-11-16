<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Models\Escuderia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piloto>
 */
class PilotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'fecha_nacimiento' => now(),
            'numero_licencia' => fake()->int(11),
            'victorias' => fake()->integer(),
            'escuderia_id' => Escuderia::all()->random()->id,
        ];
    }
}
