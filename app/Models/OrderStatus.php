<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    public $table = 'order_statuses';

    public $timestamps = false;

    public $fillable = [
        'status',
    ];
}
