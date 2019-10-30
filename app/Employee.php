<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $fillable = [
        'fullname', 'cellphone', 'email', 'address', 'area', 'fech_init', 'salario' 
    ];
}
