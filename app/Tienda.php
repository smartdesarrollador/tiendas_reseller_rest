<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //
    protected $table = "tiendas";

    protected $fillable = ["id","nombre","direccion",
                            "created_at","updated_at"];
}
