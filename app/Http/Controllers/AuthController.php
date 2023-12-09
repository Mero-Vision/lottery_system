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


    public function login(LoginRequest $request){
        
        $credentials=$request->only('email','password');

        try{
           
            $remember=true;
            if(Auth::attempt($credentials, $remember)){
                $user=Auth::user();
                sweetalert()->addSuccess('Welcome '.$user->name);
                return redirect('admin/dashboard');
                
                
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

    public function logout(Request $request)
    {
        $user = $request->user();
       
        if ($user) {
            auth()->logout();
            Auth::logoutOtherDevices($user->id);
        
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            sweetalert()->addSuccess('Logout Successfully!');
            return redirect('/login');
        } else {
            sweetalert()->addSuccess('User is not authenticated!');
            return redirect('/login');
        }
    }
}