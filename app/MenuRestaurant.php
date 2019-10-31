<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuRestaurant extends Model
{
    protected $fillable = [
        'name', 'price'
    ];
}
