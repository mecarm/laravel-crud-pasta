<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    protected $table = 'pastas';

    protected $fillable = [

        'title',
        'description',
        'type',
        'image',
        'cooking_time',
        'weight'

    ];
}
