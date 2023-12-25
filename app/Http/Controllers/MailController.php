<?php

namespace App\Http\Controllers;

use App\Mail\EmailController;
use App\Models\Mail as ModelsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
 
    public function index()
    {
        $mails = ModelsMail::all();
        return view("be.mail.index", compact("mails"));
    }
    public function sendMail(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "bail|required|email",
            "phone" => "bail|required|numeric|min:10",
            "content" => "required",
        ]);
        $mailContent = ModelsMail::create($request->all());
        Mail::to($request->email)->send(new EmailController($mailContent));
        return redirect()->back()->with("success", "thank for contact us");
    }
}
