<?php

namespace Database\Seeders;
use App\Models\Comentario;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
     
        //categorias
     Categoria::factory(50)->create();

       //posts
     Post::factory(50)->create();
       //comentario
     Comentario::factory(50)->create()->each(function($post){
         $post->PostComentario()->attach($this->postco(rand(1,50)));

     });

    }
     protected function postco($value)
     {
        $posts =[];
        for($i=0; $i < $value; $i++) $posts[] =$i;


    }
}
