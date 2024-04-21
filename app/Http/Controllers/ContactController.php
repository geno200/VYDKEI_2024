<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getContact() {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        $details = [

            'name' => $request ->name,
            'email' => $request ->email,
            'msg' => $request->msg
        ];

        Mail::to('oopeduproba@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Az üzenet sikeresen elküldve');
    }
}
