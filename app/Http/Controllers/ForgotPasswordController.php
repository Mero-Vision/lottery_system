<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Forgot_Password_Request;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgot_password');
    }

    public function resetPasswordIndex(){
        return view('reset_password');
    }

    public function forgotPassword(Forgot_Password_Request $request){

        try{
            $email = $request->email;
            DB::table('password_reset_tokens')
            ->where('email', $email)
            ->delete();

            $forgorPassword = DB::transaction(
                function () use ($request, $email) {
                    $token = Str::random(20);

                    $forgorPassword = DB::table('password_reset_tokens')->insert([
                        'email' => $request->email,
                        'token' => $token,
                        'created_at' => Carbon::now(),
                    ]);

                    Mail::to($request->email)->send(new ForgotPasswordMail($email,$token));
                    return $forgorPassword;
                }
            );
            if($forgorPassword){
                sweetalert()->addSuccess('Check your email for instructions on resetting your password.
                 If you don’t receive an email within a few minutes, please check your spam folder.');
                return back();
            }
        }
        catch(\Throwable $th){
            return back()->with('error',$th->getMessage());
        }
        
        
    }


    public function resetPassword(ResetPasswordRequest $request)
    {

        try {

            $token = $request->token;

            $validateToken = DB::table('password_reset_tokens')
            ->where('token', $token)->first();
            if (!$validateToken) {
                return back()->with('error', 'Token does not match or already deleted!');
            }
            $user = User::where('email', $validateToken->email)->first();
            if (!$user) {
                return back()->with('error', 'User does not found!');
            }
            $user->password = Hash::make($request->password);
            $user->save();
            DB::table('password_reset_tokens')
            ->where('token', $token)
                ->delete();

            return redirect('/')->with('success', 'Your password has been changed successfully!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}