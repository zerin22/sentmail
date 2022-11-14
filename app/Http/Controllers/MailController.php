<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail()
    {
        // $mailData = [
        //     "name" => "Test Mail",
        //     "dob" => "12/2/1971"
        // ];
        
        // dd("Mail Send Successfully");

        // // return view('email.index');
    }
}
