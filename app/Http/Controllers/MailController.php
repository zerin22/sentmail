<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller {

    public function Email(){
        return view('email');
    }

    public function sendEmail(Request $request) {
        $email = 'example@email.com';

        $mailData = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to($email)->send(new EmailDemo($mailData));

        // return response()->json([
        //     'message' => 'Email has been sent.'
        // ], Response::HTTP_OK);

        return redirect()->route('email');
    }
}
