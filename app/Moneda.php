<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    protected $table = "monedas";

    protected $fillable = ["id","moneda",
                            "created_at","updated_at"];
}
