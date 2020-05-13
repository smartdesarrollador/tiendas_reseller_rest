<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $table = "inventarios";

    protected $fillable = ["id",
                            "created_at","updated_at"];
    
}
