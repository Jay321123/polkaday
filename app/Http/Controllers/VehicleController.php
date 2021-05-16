<?php

namespace App\Http\Controllers;

use App\Parkers;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function parkers(){
        $parkers = Parkers::get();
    
        return view('TextArea.new', compact( 'parkers'));
    }
    
    public function send_sms($id){

        $parker = Parkers::findOrFail($id);
        $ch = curl_init();
        $itexmo = array('1' => $parker->phone_number, '2' => 'Somethings happen in your vehicle, Please come to the parking area by: HTC Parking Managment', '3' => 'TR-JAYSO609284_59JR5', 'passwd' => 'w7]9{86f9{');

        curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, 
                  http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return curl_exec ($ch);
        curl_close ($ch);
        return redirect()->back()->with('success','Message Sent!');
    }
}