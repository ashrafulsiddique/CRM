<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $fillable = [

        'product_name',
        'purchase_price',
        'sales_price',
        'product_code',
        'tax',
        'in_stock',
        'details'
        


    ];
    //   function customer(){
    // 	return $this->belongsTo('App\User');
    // }
}
