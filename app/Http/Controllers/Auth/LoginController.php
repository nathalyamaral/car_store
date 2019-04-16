<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    //use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->middleware('guest');
    }


    protected function showLoginForm(){
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(Auth::user()->nivel == "ADMIN"){
                return redirect('agencia/dashboard');
            }
            return redirect('/home');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}