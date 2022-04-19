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

      
      $mobileNumber = $number[0];
      $type = $types[1];
      $partner_code = $partner[1];
      

        
        $data=array(
            'partner_code'=>trim($partner_code),
            'type'=>trim($type),
            'contact_number'=>trim($mobileNumber)
        );
    
       
        //return $data;
         $response=DB::table('amcp')->insert($data);
         return view('success');
      //  return $number;
       
    }

    //  /**
    //     *
    //     *@return \Illuminate\Http\Response
    //     */

    // public function successfull(){
    //     return view('success');
    // }
        
}