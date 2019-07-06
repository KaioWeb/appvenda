<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //products
    //protected $table = 'products'
    protected $fillable = [
        'name','marca','number','active','category','description','amount','price'
    ];
    //protected $guarded = ['admin'];
}
