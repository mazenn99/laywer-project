<?php

namespace App\Http\Controllers\admin;

use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json(['message' => 'Unauthorized'], 401);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'token' => 'Bearer '.$tokenResult->accessToken,
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'username' => Auth::user()->user_name,
            'email' => Auth::user()->email
        ]);
    }



    // edit Password
    public function editPassword(Request $request)
    {
        \App::setLocale($request->lng);

        if (!(Hash::check($request->oldPassword, Auth::user()->password))) {
            // The passwords matches
            return response()->json(['resentCode' =>105 , 'resentMessage' => 'success'],400);
        }
        if(strcmp($request->oldPassword, $request->newPassword) == 0){
            //Current password and new password are same
            return response()->json(['resentCode' =>105 , 'resentMessage' => 'success'],400);
        }

        // Validation
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required|string',
            'newPassword' => 'required|string',
            'confirmPassword' => 'required|string|same:newPassword'
        ]);
        
        if ($validator->fails()) {
            return Response()->json(['responseCode' => '102','responseMessage'=> 'error', 'error' => $validator->errors()],400);
        }

        $user = Auth::user();
        $user->password = bcrypt($request->newPassword);
        $user->save();

        return response()->json(['resentCode' =>100 , 'resentMessage' => Lang::get('messages.success')]);
    }
}
