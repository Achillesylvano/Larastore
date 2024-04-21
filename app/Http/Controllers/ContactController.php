<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{

    public function indexContactUs()
    {
        return view('contact.index');
    }

    public function contactUs(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required','string'],
            'subject' => ['string']
        ]);

        Mail::send(new ContactUsMail($data));
        return back()->with('success','Votre demande contact a bien été envoyé');
    }
}
