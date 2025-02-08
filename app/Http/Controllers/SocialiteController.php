<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SocialiteController extends Controller
{
    //redirect google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    //callback url
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user=User::where('google_id',$googleUser->getId())->first();

            if (!$user) {
                $new_user = User::updateOrCreate([
                    'email' => $googleUser->getEmail(),
                    'username' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('random_password'),

                ]);
                Auth::Login($new_user);
                return redirect()->intended();
            } else {
                Auth::login($user);
                return redirect()->intended();
            }
        } catch (\Exception $e) {
           dd('something went wrong'.$e->getMessage());
        }
    }
}
