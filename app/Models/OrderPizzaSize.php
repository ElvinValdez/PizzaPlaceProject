<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPizzaSize extends Model
{
    use HasFactory;

    public $table = 'order_pizza_size';

    public $fillable = [
        'pizza_size_id',
        'order_id',
        'quantity',
    ];

    public function pizza_size()
    {
        return $this->belongsTo('App\Models\PizzaSize');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
