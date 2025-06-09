<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('public.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'check_in' => 'nullable|date',
            'guests' => 'nullable|string|max:10',
            'message' => 'required|string|max:2000',
            'newsletter' => 'nullable|boolean',
        ]);

        // In a real application, you would save this to database and/or send email
        // For now, we'll just redirect back with a success message
        
        // You could save to database like this:
        // ContactMessage::create($request->all());
        
        // You could send email like this:
        // Mail::to('filbertogeorge@gmail.com')->send(new ContactMessage($request->all()));

        return redirect()->back()->with('success', 
            'Thank you for your message! We will get back to you within 24 hours. For urgent matters, please call us at +250 792 086 409.');
    }
}

