<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientPizza extends Model
{
    use HasFactory;

    public $table = 'ingredient_pizza';

    public $fillable = [
        'pizza_id',
        'ingredient_id',
        'quantity',
    ];
}
