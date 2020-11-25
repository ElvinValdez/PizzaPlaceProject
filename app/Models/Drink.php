<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    public $table = 'drinks';

    public $fillable = [
        'name',
        'description',
        'size',
    ];

    public function prices()
    {
        return $this->hasMany('App\Models\DrinkPrice', 'drink_id', 'id')->where('date', '!=', NULL);
    }

    public function price()
    {
        return $this->hasOne('App\Models\DrinkPrice', 'drink_id', 'id')->where('date', '=', NULL);
    }
}
