<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Mail\ContactMeSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMeMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4|max:30',
            'email' => 'email:rfc,dns',
            'phone' => 'numeric|nullable',
            'messages' => 'required|min:4|max:255',
        ]);

        Mail::to(env('MAIL_USERNAME'))->send(new ContactMeSend($request->name, $request->email, $request->phone, $request->messages));
        // dd($validated);
        return redirect(route('contact'));
    }
}
