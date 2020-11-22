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
        'address',
        'time',
        'sent',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\User', 'customer_user_id');
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'seller_user_id');
    }
}
