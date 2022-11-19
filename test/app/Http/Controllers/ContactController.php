<?php

namespace App\Http\Controllers;

use App\Mail\CustomerContact;
use App\Mail\CustomerContactConfirmation;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $email = auth()->user()->email;
        return view('contact.contact', ['email'=>$email]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Contact::create($data);
        $myself = 'sisi.eyebrows@gmail.com';
        $customer = auth()->user()->email;

        $msg = "
        Name: $name
        Email: $email
        Subject: $subject
        Message: $message
        ";
        $ccMsg = "
        Dear $name,
        Thank You for interesting of $subject.
        Our customer support will contact You shortly.
        ";
        Mail::to($myself)->queue(new CustomerContact($msg));
        Mail::to($customer)->queue(new CustomerContactConfirmation($ccMsg));

        return back()->with('success', 'Your enquiry was sent!');
    }

}
