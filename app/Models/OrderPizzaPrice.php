<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPizzaPrice extends Model
{
    use HasFactory;

    public $table = 'order_pizza_price';

    public $fillable = [
        'pizza_price_id',
        'order_id',
        'quantity',
    ];

    public function pizza_price()
    {
        return $this->belongsTo('App\Models\PizzaPrice');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
