<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['required', 'email'],
            'subject'=>['required'],
            'message'=>['required'],
        ]);
        $maildata = [
            'title' => request('subject'),
            'email' => request('email'),
            'from_name' => request('name'),
            'body' => request('message'),
        ];
        Mail::to('abdullajonovboburjon05@gmail.com')->send(new SendMail($maildata));
        return redirect()->back()->with('success', "Your message has been send successfully");
    }
}
