<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'fullname', 'cellphone', 'email', 'address'
    ];

     public function reservClient()
    {
    	return $this->hasMany('App\Reservacion');
    }
}
