<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model
{
    protected $fillable = ['order_id','menu_id', 'product_name', 'price', 'quantity', 'subtotal'];
}
