<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $table = 'orders';

    public $fillable = [
        'customer_user_id',
        'seller_user_id',
        'driver_user_id',
        'chef_user_id',
        'order_status_id',
        'address',
        'payment_method',
        'time',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'customer_user_id');
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'seller_user_id');
    }

    public function driver()
    {
        return $this->belongsTo('App\Models\User', 'driver_user_id');
    }

    public function chef()
    {
        return $this->belongsTo('App\Models\User', 'chef_user_id');
    }

    public function order_status()
    {
        return $this->belongsTo('App\Models\OrderStatus', 'order_status_id');
    }
}
