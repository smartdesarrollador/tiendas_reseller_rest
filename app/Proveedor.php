<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = "proveedores";

    protected $fillable = ["id","descripcion",
                            "created_at","updated_at"];
}
