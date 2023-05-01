<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(30),
            'description' => fake()->text(200),
            'status' => fake()->randomElement(['Borrador', 'Publicado']),
            'type' => fake()->randomElement(['Cursos', 'Talleres', 'Capacitaciones', 'Clases']),
            'date' => fake()->date()
        ];
    }
}
