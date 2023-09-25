<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function carts()
    {
        return $this->hasMany(Cart::class)->onDelete('casade');;
    }
    public function mediaproducts()
    {
        return $this->hasMany(MediaProduct::class)->onDelete('casade');
    }
}
