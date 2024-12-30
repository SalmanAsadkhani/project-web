<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{

    public function login(Request $request)
    {
        $login  = Driver::where('email' , $request->email)->where('password' , $request->password)->get()->first();

        if ($login) {



            $token = $login->createToken('token');
            return response()->json(
                [
                    'message' => 'login success',
                    'token' => $token->plainTextToken
                ]
            );

        }

    }


}
