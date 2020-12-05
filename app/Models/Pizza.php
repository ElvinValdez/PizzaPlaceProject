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
        'image',
    ];

    public $appends = [
        'ingredients_flatten',
        'sizes_flatten',
    ];

    public function getSizesFlattenAttribute()
    {
        return implode(", ", Arr::flatten($this->belongsToMany('App\Models\Size')->where('date', '=', NULL)->pluck('name')));
    }

    public function getIngredientsFlattenAttribute()
    {
        return implode(", ", Arr::flatten($this->belongsToMany('App\Models\Ingredient')->pluck('name')));
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size')->where('date', '=', NULL)->withPivot(['id', 'price']);
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')->withPivot('quantity');
    }
}
