<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Escuderia>
 */
class EscuderiaFactory extends Factory
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
            'fecha_creacion' => now(),
            'num_pilotos' => fake()->int(11),
            'sobre_presupuesto' => fake()->tinyint(),
        ];
    }
}
