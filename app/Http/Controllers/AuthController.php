<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signIn()
    {
        if (Auth::check()) {
            return Redirect(route('homepage'));
        } else {
            return view('authentication.signIn');
        }
    }

    public function auth()
    {
        
    }

    public function logout()
    {
    }

    public function signUp()
    {
        return view('authentication.signUp');
    }
}
