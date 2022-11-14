<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail()
    {
        $mailData = [
            "name" => "Test Mail",
            "dob" => "12/2/1971"
        ];
        Mail::to("hello@email.com")->send(new TestEmail($mailData));
        dd("Mail Send Successfully");

        // return view('email.index');
    }
}
