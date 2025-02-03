<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //validate
    public function register(Request $request){
        $fields = $request -> validate([
            'email' => ['required', 'max:255', 'email', 'unique:Users'],
            'username'=>['required', 'max:255'],
            'password'=> ['required', 'min:3', 'confirmed']
        ]);

        //register

        $user=User::create($fields);

        //login

        Auth::login($user);
        //redirect
        return redirect() ->intended();

    }

    public function login(Request $request){
        $fields = $request -> validate([
            'username'=>['required', 'max:255'],
            'password'=> ['required']
        ]);

        //try to login user
        if(Auth::attempt($fields, $request->remember)){
            return redirect() -> intended();
        }else{
            return back() -> withErrors([
                'failed' => 'credentials does match our records'
            ]);
        }
    }
    //logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
    

