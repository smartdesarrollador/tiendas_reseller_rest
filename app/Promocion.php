<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    //
    protected $table = "promociones";

    protected $fillable = ["id","descripcion",
                            "created_at","updated_at"];
}
