<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
      

        $mobileNumber=$number[0];
        $type=$types[0];
        $partner_code=$partner[0];

        $data=array(
            'partner_code'=>$partner_code,
            'type'=>$type,
            'contact_number'=>$mobileNumber
        );
        
        $response=DB::table('amcp')->insert($data);
        return view('success');
       
    }

    //  /**
    //     *
    //     *@return \Illuminate\Http\Response
    //     */

    // public function successfull(){
    //     return view('success');
    // }
        
}