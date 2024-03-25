<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Validator;
class AuthController extends Controller
{

    public function UserRegister(Request $request){
         $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'phone' => 'required|unique:users|regex:phone',
            'password'=>'required|min:8',

        ]);
        if (preg_match('/^09[0-9]{8}$/', $request->phone)) {
         $user=User::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'phone'=> $request->phone,
            'password'=> bcrypt($request->password),
        ]);}
     else {
        return response()->json(['error' => [trans('message.error')]], 200);
    }
        $token = $user->createToken('pharmaLaravel', ['User'])->accessToken;
        return response()->json(['token'=>$token],200);
    }
    public function UserLogin(Request $request){
       $data=[
            'phone'=> $request->phone,
            'password'=> $request->password,
       ];
       if(auth()->guard('user')->attempt(['phone' => request('phone'), 'password' => request('password')])){

        config(['auth.guards.api.provider' => 'user']);

        $user = User::query()->select('users.*')->find(auth()->guard('user')->user()->id);
        $success =  $user;
        $success['token'] =  $user->createToken('pharmaLaravel', ['User'])->accessToken;

        return response()->json($success, 200);
    }else{
        return response()->json(['error' => [trans('message.phone_number_or_password_wrong')]], 200);
}}
    public function UserLogout(){
        Auth::guard('user-api')->user()->token()->revoke();
        return response()->json(['message' => trans('message.logged_out')], 200);
    }
       //admin________________________________________________
       public function adminRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required|unique:admins|regex:phone',
            'password'=>'required|min:8',

        ]);
        if (preg_match('/^09[0-9]{8}$/', $request->phone)) {
            $admin=Admin::create([
                'first_name'=> $request->first_name,
                'last_name'=> $request->last_name,
                'phone'=> $request->phone,
                'password'=> bcrypt($request->password),
            ]);

        } else {
            return response()->json(['error' => [trans('message.error')]], 200);
        }
        $token = $admin->createToken('pharmaLaravel', ['Admin'])->accessToken;
        return response()->json(['token'=>$token],200);

    }
    public function adminLogin(Request $request){
        $data=[
            'phone'=> $request->phone,
            'password'=> $request->password,
       ];
       if(auth()->guard('admin')->attempt(['phone' => request('phone'), 'password' => request('password')])){

        config(['auth.guards.api.provider' => 'admin']);

        $admin = Admin::query()->select('admins.*')->find(auth()->guard('admin')->user()->id);
        $success =  $admin;
        $success['token'] =  $admin->createToken('pharmaLaravel', ['Admin'])->accessToken;

        return response()->json($success, 200);
    }else{
        return response()->json(['error' => [trans('message.phone_number_or_password_wrong')]], 200);
}}

       public function adminLogout(){
        Auth::guard('admin-api')->user()->token()->revoke();
        return response()->json(['message' => trans('message.logged_out')], 200);
    }
     }
