<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public $table = 'pizzas';

    public $fillable = [
        'name',
        'description',
        'size_id',
    ];

    public function prices()
    {
        return $this->hasMany('App\Models\PizzaPrice', 'pizza_id', 'id')->where('date', '!=', NULL);
    }

    public function price()
    {
        return $this->hasOne('App\Models\PizzaPrice', 'pizza_id', 'id')->where('date', '==', NULL);
    }

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')->withPivot('quantity');
    }
}
