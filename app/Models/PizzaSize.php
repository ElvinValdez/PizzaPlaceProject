<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    use HasFactory;

    public $table = 'pizza_size';

    public $timestamps = false;

    public $fillable = [
        'pizza_id',
        'size_id',
        'price',
        'date',
    ];

    public function pizza()
    {
        return $this->belongsTo('App\Models\Pizza');
    }

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }
}
