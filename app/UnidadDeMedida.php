<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadDeMedida extends Model
{
    //
    protected $table = "unidades_de_medidas";

    protected $fillable = ["id","unidad_medida","descripcion",
                            "created_at","updated_at"];
}
