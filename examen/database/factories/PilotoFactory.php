<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Escuderia;

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
            'numero_licencia' => fake()->buildingNumber(),
            'victorias' => fake()->buildingNumber(),
            'escuderia_id' => Escuderia::all()->random()->id,
        ];
    }
}
