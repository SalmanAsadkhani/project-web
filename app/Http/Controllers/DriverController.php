<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
class DriverController extends Controller
{

    public function login(Request $request)
    {

        $login = Driver::where('email' , $request->email)
            ->where('password' , $request->password)->first();




        if ($login) {

            $token = $login->createToken('login');

            return response()->json([
                'message' => 'Login Successful',
                'token' => $token->plainTextToken,
            ]);

        }

        else {
            return response()->json([
                'message' => 'Login Failed',
            ]);
        }

    }


}
