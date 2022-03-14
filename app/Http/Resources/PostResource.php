<?php

namespace App\Http\Resources;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'categoria' => $this->nombre,
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,         
         //'comentario'=> ComentarioResource::collection($this->contenido),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
             ->format('d-m-Y')
        ];
    }
}
