<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaPrice extends Model
{
    use HasFactory;

    public $table = 'pizza_prices';

    public $fillable = [
        'date',
        'price',
        'pizza_id',
    ];

    public function pizza()
    {
        return $this->belongsTo('App\Models\Pizza');
    }
}
