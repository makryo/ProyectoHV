<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Barryvdh\DomPDF\Facade as PDF;

class GeneradorController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function imprimir(){

    $pdf = \PDF::loadView('pdf');
    return $pdf->download('reporteReservacion.pdf');
}
}
