<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDePedido extends Model
{
    //
    protected $table = "estado_pedidos";

    protected $fillable = ["id","estado_pedido","descripcion",
                            "created_at","updated_at"];
}
