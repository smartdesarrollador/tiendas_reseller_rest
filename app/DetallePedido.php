<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    //
    protected $table = "detalle_pedidos";

    protected $fillable = ["id","cantidad","subtotal",
                            "created_at","updated_at","productos_id",
                            "pedidos_id"];
}
