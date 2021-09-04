<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected $table = 'producto'; si modelo se llama diferente que la tabla esta linea indica con que tabla se debe trabajar

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function category(){
        return $this->belongsTo(Category::class);
    }
}
