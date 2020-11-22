<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkPrice extends Model
{
    use HasFactory;

    public $table = 'drink_prices';

    public $fillable = [
        'date',
        'price',
        'drink_id',
    ];

    public function drink()
    {
        return $this->belongsTo('App\Models\Drink');
    }
}
