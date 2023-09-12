<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function sendMessage(Request $request)
    {
        dd($request);
    }


    private function bot($method, $datas=[]){
        $url = "https://api.telegram.org/bot5318773962:AAGRxRUKo4Y5AQMGUPaZu88oEVMqC3cxJ5w/".$method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        }else{
            return json_decode($res);
        }
    }
}
