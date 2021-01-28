<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contacts.index', [
            'columns' => [
                'full_name' => 'text',
                'email' => 'text',
                'phone_number' => 'text',
                'message' => 'text',         
            ],
            'contacts' => Contact::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        $data = $request->only([
            'full_name',
            'email',
            'phone_number',
            'message',
        ]);
        $data['slug'] = $data['full_name'];
        Contact::create($data);

        return redirect()->route('dashboard.contacts.index')->with(['success' => 'New Contact Added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('dashboard.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $this->validateRequest($request);
        $contact->full_name = $request->input('full_name');
        $contact->slug = $contact->full_name;
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('dashboard.contacts.index')->with(['success' => 'Contact Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard.contacts.index')->with(['success' => 'Contact Deleted']);
    }

    /**
     * @return void
     */
    protected function validateRequest()
    {
        return request()->validate([
            'full_name' => 'required|string|max:191',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required|string',
        ]);
    }
}
