<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Pizza extends Model
{
    use HasFactory;

    public $table = 'pizzas';

    public $fillable = [
        'name',
        'description',
        'size_id',
        'image',
    ];

    public $appends = [
        'ingredients_flatten',
    ];

    public function getIngredientsFlattenAttribute()
    {
        return implode(", ", Arr::flatten($this->belongsToMany('App\Models\Ingredient')->pluck('name')));
    }

    public function prices()
    {
        return $this->hasMany('App\Models\PizzaPrice', 'pizza_id', 'id')->where('date', '!=', NULL);
    }

    public function price()
    {
        return $this->hasOne('App\Models\PizzaPrice', 'pizza_id', 'id')->where('date', '=', NULL);
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
