<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = "usuarios";

    protected $fillable = ["id","nombre","password","telefono","correo","direccion","imagen",
                            "created_at","updated_at","roles_id"
                            ];
}
