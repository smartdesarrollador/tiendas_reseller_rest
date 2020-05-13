<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    //
    protected $table = "repartidores";

    protected $fillable = ["id","nombre","apellido","telefono","correo","direccion","imagen",
                            "created_at","updated_at"];
}
