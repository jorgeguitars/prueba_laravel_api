<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Posts_id' => Post::all()->random()->id,
            'contenido'=> $this->faker->text(500)
        ];
    }
}
