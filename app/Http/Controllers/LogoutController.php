<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
	
    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/login');
}
}
