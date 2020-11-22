<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public $table = 'ingredients';

    public $fillable = [
        'name',
        'description',
        'unit_id',
    ];

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    public function pizzas()
    {
        return $this->belongsToMany('App\Models\Pizza');
    }
}
