<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
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
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
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
