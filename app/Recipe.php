<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $fillable=[
        'meal',
        'description',
        'ingredients',
        'instructions',
        'image'
    ];
}
