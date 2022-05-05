<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //

    public function register(Request $request){
        $fields = $request->validate([
            'name' =>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials)){

            return response()->json([
                'status_code' => '500',
                'message' => 'No authorized'
            ]);
        }

        $user = User::where('email', $request->email)->first();

        // $user = User::where('email',$fields['email'])->first();

        // if(!user || !Hash::check($fields['password'],$user->password)){
        //     return response(
        //         ['messsage'=>'Bad credentials'],401
        //     );
        // }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }

    public function logout(Request $request){
        // auth()->user()->tokens()->delete(); //error in this tokens() method
        $request->user()->currentAccessToken()->delete();
        return ['message'=>'logged out'];
    }
}
