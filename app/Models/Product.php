<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function carts()
    {
        return $this->hasMany(Cart::class)->onDelete('cascade');
    }
    public function mediaproducts()
    {
        return $this->hasMany(MediaProduct::class)->onDelete('cascade');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
