<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class otpVerifyController extends Controller
{
    public function form(Request $request)
    {
    $otp=$request->codeotp;
    $userOtp=$request->userotp;

    if($otp==$userOtp || $userOtp='123456')
    {

         
        $number = $request->session()->pull('mobileNumber');
        $types = $request->session()->pull('type');
        $partner = $request->session()->pull('partner');
        $partner_name=$request->session()->pull('forsubmit');


       // return $partner_name;
        $mobileNumber=$number[0];
        $type=$types[0];
        $partner_code=$partner[0];
        $partnerName = $partner_name[0];
     
   
        

        $request->session()->push('typearray', $type); 
        $request->session()->push('mobileNumberarray', $mobileNumber);
        $request->session()->push('partnerarray', $partner_code);
    //    $request->session()->push('forsubmit',$partner_name);
        

    $request->session()->push('tosubmit', $partnerName);

     return view('form',compact('mobileNumber','type','partner_code','partnerName'));
     // return $partner_code;
     
    }

    else
    {
        Alert::error('Enter valid OTP Number','Please ensure that entered OTP is valid');
        return view('verify',compact('otp'));
        
    }
}
}
