<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function saveContactMessage(Request $request) {
        
        $contact = New Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        if($contact->id) {
            return redirect()->back()->with('success', 'Message Sent: Thank you for your message! We shall get to you soon!');
        } else {
            return redirect()->back()->withErrors('Error: something went wrong. Try Resending your message.');
        }
        

    }
}
