<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Pusher\Pusher;

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

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:8',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $data['title'] = "Hi " . Auth::user()->name;
            $data['content'] = "Wellcome back, lets's shop together";

            $options = array(
                'cluster' => 'mt1',
                'encrypted' => true
            );

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );

            $pusher->trigger('Notify', 'send-message', $data);
            return Redirect(route('homepage'));
        } else {
            return Redirect(route('sign-in'))
                ->withErrors('Wrong account or wrong password')
                ->withInput(
                    $request->except('password'),
                );
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect(route('homepage'));
        } else {
            return Redirect(route('homepage'));
        }
    }

    public function signUp()
    {
        return view('authentication.signUp');
    }
}
