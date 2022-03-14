<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comentario = Comentario::all();
        return $comentario;
   
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
            'Posts_id' => 'required|integer',
            'contenido' => 'required|string|max:500',
    
        ]);
        // save 
        $comentario = new Comentario();
        $comentario->Posts_id = $request->Posts_id;
        $comentario->contenido = $request->contenido;
        $comentario ->save();
        return \response(content: "Comentario Creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        return Comentario::findOrFail($comentario->id);
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
            'Posts_id' => 'required|integer',
            'contenido' => 'required|string|max:500',
    
        ]);
        // save 
        $comentario = comentario::find($id);
        $comentario->Posts_id = $request->Posts_id;
        $comentario->contenido = $request->contenido;
        $comentario ->update();
        return \response(content: "Comentario Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::destroy($id);
        return \response(content: "El comentario con el id:{$id} ha sido eliminado");
    }
}
