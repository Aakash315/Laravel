<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    function sendmail(Request $request) {
        $to =$request->to;
        $msg = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Email Send";
    }
}