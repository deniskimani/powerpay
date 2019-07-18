<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";

    protected $fillable = [
        'product_id', 'type', 'product_name', 'amount', 'period'
    ];
    public $timestamps = false;
}
