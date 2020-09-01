<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcar extends Model
{
    protected $fillable = ["quantity","product_id","cart_id"];
}
