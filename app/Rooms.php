<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
        'number', 'price', 'level', 'state', 'air', 'implement', 'furniture', 'dimension'
    ];

     public function reservRoom()
    {
    	return $this->hasMany('App\Reservacion');
    }
}
