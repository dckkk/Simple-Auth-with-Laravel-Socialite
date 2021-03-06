<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LinkedController extends Controller
{
    /**
     * Redirect the user to the Social Media authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from Social Media.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('linkedin')->user();

        // $user->token;
    }
}
