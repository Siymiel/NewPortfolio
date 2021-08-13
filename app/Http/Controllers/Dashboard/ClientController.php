<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.clients.index', [
            'columns' => [
                'title' => 'text',
                'position' => 'text',
                'body' => 'text',
                'active' => 'string',
            ],
            'clients' => Client::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clients.create');
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
            'title',
            'position',
            'body',
            'active',
        ]);
        $data['slug'] = $data['title'];

        $client = Client::create($data);

        if($request->hasFile('image')){
            $client->addMediaFromRequest('image')->toMediaCollection('image');
        }
        
        return redirect()->route('dashboard.clients.index')->with(['success' => 'New Client Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('dashboard.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('dashboard.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $this->validateRequest($request);

        $client->title = $request->input('title');
        $client->slug = $client->title;
        $client->position = $request->input('position');
        $client->body = $request->input('body');
        $client->active = $request->input('active');

        $client->save();

        if($request->hasFile('image')){
            if($image = $client->getFirstMedia('image')) {
                $image->delete();
            }
            $client->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('dashboard.clients.index')->with(['success' => 'Client Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('dashboard.clients.index')->with(['success' => 'Client Deleted']);

    }

    /**
     * @return void
     */
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required|string|max:191',
            'position' => 'required|string|max:191',
            'body' => 'required|string',
            'active' => 'required',
        ]);
    }
}
