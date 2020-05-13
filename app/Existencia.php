<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Existencia extends Model
{
    //
    protected $table = "existencias";

    protected $fillable = ["id","existencia",
                            "created_at","updated_at"];
}
