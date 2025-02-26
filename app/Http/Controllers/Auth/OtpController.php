<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    public function loginOtp(){
        $otp = rand(100000,999999);
        $user = Auth::user();
        $user->otp = $otp;
        $user->save();

        Mail::send('emails.OtpNotification',compact('user','otp'), function ($message) use ($user) {
            $message->to($user->email);
            $message->subject("Your OTP Code");
        });

        return view('auth.loginWithOtp');
    }

    public function loginWithOtpPost(Request $request){

        $request->validate([
            'otp' => 'required | integer '
        ]);

        $user = Auth::user();

        if($request->otp == $user->otp){
            $user->otp = null;
            $user->save();
            session(['otp_authentication' => true]);
            return redirect()->route('dashboard.home');
        } else{
        return redirect()->route('login.otp')->with('error','The provided OTP is not correct');

        }

}

}
