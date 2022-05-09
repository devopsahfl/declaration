<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class insertDataController extends Controller
{

      /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */
     public function save(Request $request)
    {  
         $number = $request->session()->pull('mobileNumberarray');
         $types = $request->session()->pull('typearray');
        $partner = $request->session()->pull('partnerarray');
        $partner_name = $request->session()->pull('tosubmit');
      

      

      $mobileNumber = $number[0];
      $type = $types[0];
      $partner_code = $partner[0];
      $partner_name = $partner_name[0];

        
        //\\return [$mobileNumber,$type,$partner_code,$partner_name];
      //----\\
     //      \\
    //        \\
        $data=array(
            'partner_code'=>trim($partner_code),
            'type'=>trim($type),
            'contact_number'=>trim($mobileNumber),
            'partner_name'=>trim($partner_name)
        );
    
       
        //return $data;
         $response=DB::table('amcp')->insert($data);
         return view('success');
      //  return $number;
       
    }
        
}