<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = "pedido";

    protected $fillable = ["id","numero_pedido","total","impuesto",
                            "created_at","updated_at","forma_de_pagos_id",
                            "cuotas_id","clientes_id","usuarios_id","monedas_id",
                            "empresarios_id","repartidores_id","promociones_id",
                            "estado_pedidos_id","descuentos_id"];
}
