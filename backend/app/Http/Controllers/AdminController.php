<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){

        if(Auth::attempt($request->only(['username', 'password']))){
            $user = Auth::user();
            if($user->status == 'In-Active') // Checks if user is In-active 
            {
                return response()->json(['error' => 'USER_INACTIVE'], 403);
            }
            $user['authToken'] = Auth::user()->createToken($browsers.', '.$device)->plainTextToken;                       
            return response()->json(['error' => '', 'user' => $user]);
        }
        else
        {
            return response()->json(['error' => 'INVALID_CREDENTIALS'], 401);
        }

    }
}
