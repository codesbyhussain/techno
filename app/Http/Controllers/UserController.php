<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Validator;
use App\Mail\contactuser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !(Hash::check($req->password,$user->password))){
            return "username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);               
            return redirect('/');
        }
    }

    
    public function register(Request $request)  //create user account
    {
        try{
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',
            'email' => 'required|email',
            'password' => 'required|min:2',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors();
        }

        $data = $request->only(['name', 'email', 'password']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $user->save();

        return redirect("/login");}

        catch(Exception $e){
            return redirect("/register");
        }
    }

}
