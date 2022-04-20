<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    /**
        * @param \Illuminate\Http\Request
        *@return \Illuminate\Http\Response
        */



     function getData(Request $request)
     {
      $mobileNumber=$request->contact_number;

      return $mobileNumber;
     }
     
    function index()
    {
             
            $country_list = DB::table('amcp_data')->select('type','partner_code','partner_name','contact_number')->get();

            return view('dynamic_dependent')->with('country_list', $country_list);
    }
    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('amcp_data')
       ->where($select, $value)
       ->select($dependent)
       ->get();
     $output = '<option value="">Select '.amcp_data($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }


    function send()
    {
      return "test";
    }

}
