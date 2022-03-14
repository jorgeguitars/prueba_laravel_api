<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ComentarioResource extends JsonResource
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
            'id' => $this->id,
            'Posts_id' => $this->Posts_id,
            'contenido' => $this->contenido,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
             ->format('d-m-Y')

        ];

    }
}
