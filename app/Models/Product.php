<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id');
    }
}
