<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.form')
                ->withErrors($validator)
                ->withInput();
        }

        // Process and store the contact form data.

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}

