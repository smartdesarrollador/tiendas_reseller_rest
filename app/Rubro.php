<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    //
    protected $table = "rubros";

    protected $fillable = ["id","nombre","descripcion",
                            "created_at","updated_at"];
}
