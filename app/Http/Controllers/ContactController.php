<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'email', 'subject', 'message']);

        try {
            // Send email
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('balipermatal@gmail.com')
                        ->subject('Website Contact: ' . $data['subject'])
                        ->from($data['email'], $data['name']);
            });

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
