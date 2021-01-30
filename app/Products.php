<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    public $fillables = [
        'product-code',
        'product_name',
        'supplier',
        'quantity',
        'quantity_sold',
        'quantity_remaining',
        'date_purchased'
   ];
}
