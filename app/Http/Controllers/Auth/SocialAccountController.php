<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialAccountController extends Controller
{
    //
    public function redirectToProvider(){
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(\App\SocialAccountService $accountService, $provider){
        $user = Socialite::with($provider)->user();
        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );
        auth()->login($authUser, true);
        return redirect()->to('/');
    }
}
