<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;


class GetOtpController extends Controller
{
    
    /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */
     
    function getData(Request $request)
    {
     $mobileNumber=$request->contact_number;
     $type=$request->type;
     $partner=$request->partner_code;

     $request->session()->push('type', $type); 
     $request->session()->push('mobileNumber', $mobileNumber);
     $request->session()->push('partner', $partner);

     $request->session()->push('typearray', $type); 
     $request->session()->push('mobileNumberarray', $mobileNumber);
     $request->session()->push('partnerarray', $partner);
      

     $otp=$this->generateNumericOTP();
     $equenceApiCallResponse=$this->equneceApiCall($mobileNumber,$otp);

     return view('verify',compact('otp'));
    }



    public function equneceApiCall($mobileNumber,$otp)
    {
      $mobileNumber=$mobileNumber;
      $otp=$otp;
   
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.equence.in/pushsms',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "username": "recruitment",
            "password": "aeGQ-52-",
            "peId": "1001900184535850000",
            "tmplId": "1007276557498698249",
            "to": '.$mobileNumber.',
            "from": "AHFLCO",
            "charset": "UTF-16",
            "text": "Use OTP '.$otp.' for authenticating your contact no. with Aadhar Housing Finance. Valid for 30 Mins only."
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
       
        $response = curl_exec($curl);
       
        curl_close($curl);
        return json_decode($response)->response[0]->status;
    }


    public function generateNumericOTP() {
     
       
        $generator = "1357902468";
        $n=6;
     
    
     
        $result = "";
     
        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (rand()%(strlen($generator))), 1);
        }
     
        // Return result
        return $result;
    }
    //------------pdf file------------------------
    public function downloadPdf()  {
        // $empcode='';
      $pathname = DB::table('pdf')->take(1)->get();
      
      $path=$pathname[0]->path;
      
      $filepath = storage_path('/app/'.$path);
      return response()->download($filepath);
      }
    
}
