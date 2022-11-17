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
        return view('booking.contact', ['email'=>$email]);
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);

        $contact = Contact::create($data);
        $myself = 'sisi.eyebrows@gmail.com';

        Mail::to($myself)->queue(new CustomerContact($contact));
        Mail::to($request->email)->queue(new CustomerContactConfirmation($contact));

        return back()->with('success', 'Your enquiry was sent!');
    }

}
