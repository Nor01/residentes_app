<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
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

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }

    public function forgotPassword(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return [
                'status' => __($status)
            ];
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }

    public function resetPassword(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password'=> ['required', 'confirmed', RulesPassword::defaults()],
        ]);

        $status = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function ($user) use ($request){
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token'=> Str::random(60),

                ])->save();

                $user->tokens()->delete();

                event(new PasswordReset($user));
            }
        );

        if($status==Password::PASSWORD_RESET){
            return response(['message'=>'Password reset successfully']);

        }

        return response(['message'=>__($status)],500);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return ['message'=>'logged out'];
    }
}
