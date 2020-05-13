<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table = "productos";

    protected $fillable = ["id","nombre","descripcion","precio","imagen",
                            "created_at","updated_at","categorias_id",
                            "rubros_id","marcas_id","unidades_de_medidas_id","existencias_id"];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categorias_id','id');
    }
}

