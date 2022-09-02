<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){

        if(Auth::guard('admin')->attempt($request->only(['username', 'password']))){
            $user['authToken'] = Auth::guard('admin')->createToken('mibleall')->plainTextToken;                       
            // return response()->json(['error' => '', 'user' => $user]);
            return 200;
        }
        else
        {
            return response()->json(['error' => 'INVALID_CREDENTIALS'], 401);
        }

    }
}
