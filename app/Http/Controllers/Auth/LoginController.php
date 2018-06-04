<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(){
        $this->validate(request(), [
            'user' => 'required|string',
            'password' => 'required|string'
        ]);
    }
}
