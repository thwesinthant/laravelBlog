<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {

        try {
            $SocialUser = Socialite::driver($provider)->user();

            if (User::where('email', $SocialUser->getEmail())->exists()) {
                return redirect('/login')->withErrors(['email' => 'This email use different method to login.']);
            }
            $user = User::where([
                'provider' => $provider,
                'provider_id' =>
                $SocialUser->id,
            ])->first();
            if (!$user) {
                $user = User::create([
                    'name' => User::generateUsername($SocialUser->getName()),
                    'username' => User::generateNickname($SocialUser->getNickname()),
                    'email' => $SocialUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $SocialUser->getId(),
                    'provider_token' => $SocialUser->token,
                    'email_verified_at' => now(),
                ]);
            }

            Auth::login($user);

            return redirect('/');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
