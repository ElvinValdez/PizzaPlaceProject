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
}
