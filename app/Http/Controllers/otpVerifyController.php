<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class otpVerifyController extends Controller
{
    public function form(Request $request)
    {
    $otp=$request->codeotp;
    $userOtp=$request->userotp;

    if($otp==$userOtp)
    {

         
        $number = $request->session()->pull('mobileNumber');
        $types = $request->session()->pull('type');
        $partner = $request->session()->pull('partner');

        $mobileNumber=$number[0];
        $type=$types[0];
        $partner_code=$partner[0];
         
      return view('form',compact('mobileNumber','type','partner_code'));
     
    }

    else
    {
        Session::flash('warning','Invalid');
           return view('verify',compact('otp'));
     // return "Invalid";       
      //return view('otp');
    }
}
}
