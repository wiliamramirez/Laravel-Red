<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    // Campos que se agregaran
    protected $fillable = [
        "titulo", "preparacion", "ingredientes", "imagen", "categoria_id",
    ];

    // Obtine la categoria de la receta via fk
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class, "categoria_id");
    }

    // Obtiene la informacion del usuario via FK
    public function autor()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    // Likes que ha recibido una receta
    public function likes()
    {
        return $this->belongsToMany(User::class, "likes_receta");
    }
}
