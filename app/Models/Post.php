<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $guarded = [ 'id' ];

    public function categoria()
    {
     
        return $this->belongsTo(Categoria::class);

    }

    public function comentario()
    {
     
        return $this->belongsToMany(Comentario::class);

    }
}
