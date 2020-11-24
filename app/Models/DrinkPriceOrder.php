<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkPriceOrder extends Model
{
    use HasFactory;

    public $table = 'drink_price_order';

    public $fillable = [
        'drink_price_id',
        'order_id',
        'quantity',
    ];

    public function drink_price()
    {
        return $this->belongsTo('App\Models\DrinkPrice');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
