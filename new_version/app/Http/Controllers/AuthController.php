<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $fields = $request->validate([
            'role_id'=>'required',
            'name' =>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'

        ]);

        //Probably we will need a controller and model for this
        $user = User::create([
            'role_id'=>$fields['role_id'],
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }

    // public function register(RegisterRequest $request){

    //     $usercreate = User::create($request->validated());

    //     $token = $usercreate->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $usercreate,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    // public function login(LoginRequest $request)
    // {

    //     if (!Auth::attempt($request->only('email', 'password'))) {
    //         return response([
    //             'errors' => 'Invalid credentials'
    //         ], 401);
    //     }

    //     $user = Auth::user();

    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);

        //Check email
        $user = User::where('email',$fields['email'])->first();

        //Check password
        if(!$user || !Hash::check($fields['password'], $user->password)){

            return response ([
                'message'=>'Bad credentials'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ['message' => 'logged out'];
    }
}
