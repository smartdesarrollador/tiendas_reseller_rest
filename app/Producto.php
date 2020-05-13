<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = "productos";

    protected $fillable = ["id","nombre","descripcion","precio","imagen","categorias_id"];

    protected $hidden = ["created_at","updated_at"];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categorias_id','id');
    }
}

