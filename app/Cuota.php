<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    //
    protected $table = "cuotas";

    protected $fillable = ["id","cantidad",
                            "created_at","updated_at"];
}
