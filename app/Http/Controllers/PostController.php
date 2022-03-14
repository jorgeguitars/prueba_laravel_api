<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = Post::all();
        //return $post;
        
        return PostResource::collection(Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              
               //validations
               $this->validate($request, [
                   'Categorias_id' => 'required|integer',
                   'titulo' => 'required|string|max:150',
                   'contenido' => 'required|string',
               ]);
               // save 
               $post = new Post();
               $post->Categorias_id = $request->Categorias_id;
               $post->titulo = $request->titulo;
               $post->contenido = $request->contenido;
               $post ->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      return Post::findOrFail($post->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          //validations
          $this->validate($request, [
            'Categorias_id' => 'required|integer',
            'titulo' => 'required|string|max:150',
            'contenido' => 'required|string',
        ]);
        // save 
    
        $post = Post::find($id);
        $post->Categorias_id = $request->Categorias_id;
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
 
        $post ->update();
         return \response(content: "Post Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::destroy($id);
        return \response(content: "El Post con el id:{$id} ha sido eliminado");
    }
}
