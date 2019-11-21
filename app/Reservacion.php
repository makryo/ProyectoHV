<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table = 'reservacions';
    protected $fillable = ['room_id','fech_inicio', 'fech_fin', 'client_id', 'users_id'];

    public function habitacion()
    {
    	return $this->belongsTo('App\Rooms');
    }

    public function cliente()
    {
    	return $this->belongsToMany('App\Client');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\User');
    }

   
}
