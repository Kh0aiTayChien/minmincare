<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';

    public function carts()
    {
        return $this->hasMany(Cart::class)->onDelete('cascade');
    }
}
