<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\Debugbar\Facade;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return Redirect(route('dashboard'));
        } else {
            return view("admin.login");
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect(route('admin-login'));
        } else {
            return Redirect(route('admin-login'));
        }
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:8',
        ]);
        $authData = [
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1,
        ];

        if (Auth::attempt($authData)) {
            return Redirect(route('dashboard'));
        } else {
            return Redirect(route('admin-login'))
                ->withErrors(['Wrong account or wrong password'])
                ->withInput(
                    $request->except('password')
                );
        }
    }
}
