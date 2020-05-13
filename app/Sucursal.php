<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    protected $table = "sucursales";

    protected $fillable = ["id","descripcion","direccion",
                            "created_at","updated_at"];
}
