<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Categorias_id' => Categoria::all()->random()->id,
            'titulo'=> $this->faker->word(),
            'contenido'=> $this->faker->paragraphs(2,6)
        ];
    }
}
