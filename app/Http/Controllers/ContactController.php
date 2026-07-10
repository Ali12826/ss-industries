<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Import the Model we created

class ContactController extends Controller
{
    // 1. Show the Form
    public function index()
    {
        return view('contact');
    }

    // 2. Handle the Form Submission
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Save to Database
        $contact = new ContactMessage();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        // Redirect back with a success message
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
