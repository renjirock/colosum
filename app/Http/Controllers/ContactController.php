<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\MailableContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index(Request $request){
        $contact = Contact::create([
            'email' => $request->email,
            'name' => $request->name,
            'store_name' => $request->store_name,
            'message' => $request->message
        ]);
        if ($contact) {
            Mail::to($request->email)->send(new MailableContact());
            return redirect()->back()->with('success', 'Your message was sent successfully!');
        }
        return redirect()->back()->with('error', 'Your message not was sent successfully!');
    }
}
