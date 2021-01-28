<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppcontactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'full_name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email', 'max:191'],
            'phone_number' => ['required', 'max:191'],
            'message' => ['required', 'string'],
        ]);
        
        $data = $request->only([
            'full_name',
            'email',
            'phone_number',
            'message',
            ]);

        $data['slug'] = $data['full_name'];
        
       $contact = Contact::create($data);

        Mail::send(new ContactMade($contact));

        return redirect()->route('storeContact')->with(['success' => 'Hi there! Thank you for reaching out. I\'ll get back to you soon. Thanks!']);
    }
}
