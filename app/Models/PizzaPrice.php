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
        'pizza_size_id',
    ];

    public function pizza_size()
    {
        return $this->belongsTo('App\Models\PizzaSize');
    }
}
