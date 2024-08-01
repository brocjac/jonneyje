<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller{
    public function submit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $messages = [
            'name.required' => 'We need to know your name!',
            'email.required' => 'Do not forget your email address!',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'A message is required to submit the form.',
        ];
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ], $messages);

        Mail::to('jonathan@jonnyje.com')->send(new ContactMail($validated));

        return redirect()->back()->with('message', 'Thanks for contacting us!');
    }
}
