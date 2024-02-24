<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Ossycodes\FriendlyCaptcha\Rules\FriendlyCaptcha;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::orderByDesc('created_at')->paginate(30);
        return view('dashboard.contact')->with("contacts", $contacts);
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'required|string|max:255', // Corrected field name
            'frc-captcha-solution' => ['required', app(FriendlyCaptcha::class)],
        ]);

        // Proceed to store the data
        $contact = new Contact;
        $contact->name = $validatedData['name'];
        $contact->mail = $validatedData['email'];
        $contact->text = $validatedData['message'];
        $contact->suject = $validatedData['subject']; // Corrected field name
        $contact->save();

        return response()->json('OK', 200);

    }
}
