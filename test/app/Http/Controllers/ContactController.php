<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactConfirmation;
use App\Jobs\SendContactEmail;
use App\Mail\ContactConfirmation;
use App\Mail\CustomerContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('booking.contact');
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

        return back()->with('success', 'Our Customer support will contact You shortly');
    }

}
