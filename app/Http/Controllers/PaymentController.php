<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PaymentController extends Controller
{
    public function index(){

        return view('dashboard.pages.paystackpayment');
    }

    public function verifyPayment($reference){
        $secretKey = "sk_test_4809a9cb7fbc05374151c0e76c1ebe213022c2db";
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $secretKey",
            "Cache-Control: no-cache",
          ),
        )); 
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response);
        return [$decodedResponse];
    }

    public function redirectSuccess(){
        $userId = Auth::id();
        $user   =  User::findOrFail($userId);
        $user->is_activated = true;
        $user->save();
        return redirect('/userdashboard');
    }
}
 