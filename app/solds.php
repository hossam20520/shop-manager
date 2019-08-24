<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solds extends Model
{
    //
    protected $fillable = [
        'id_product_sold', 'number_sold' , 'price_sold' , 'price_org','date',
    ];
}
