<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = "clientes";

    protected $fillable = ["id","nombre","apellido","telefono","correo","direccion","imagen",
                            "created_at","updated_at","tarjetas_id","distritos_id"];
}
