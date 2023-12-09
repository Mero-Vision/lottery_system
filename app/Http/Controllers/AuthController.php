<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function forgotPasswordIndex(){
        return view('forgot_password');
    }

    public function login(LoginRequest $request){
        
        $credentials=$request->only('email','password');

        try{
            if(Auth::attempt($credentials)){
                $user=Auth::user();
                return back()->with('success','login success');
                
                
            }else{
                sweetalert()->addWarning("We couldn't verify your credentials. Please 
                check your email and password!");
                return back();
            }
            
        }
        catch(\Throwable $t){
            return back()->with('error',$t->getMessage());
            
        }

        
        
    }
}