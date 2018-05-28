<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use fa\model\User;
class AuthenticateController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials["email"] )->first();
        $customClaim = [];
        
        if(is_object($user))
        {
            $customClaim["userName"] = $user->userName;
            $customClaim["firstName"] = $user->firstName;
            $customClaim["lastName"] = $user->lastName;
        }
        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials, $customClaim)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
            
        } catch (JWTException $e) {
            // something went wrong
            dd("Error?");
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        //return redirect('/')->with('token', response()->json(compact('token')));
        
        return response()->json(compact('token'));
    }

    public function index()
    {
        return response()->json("hallo");
    }
}
