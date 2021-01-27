<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.services.index', [
            'columns' => [
                'title' => 'text',
                'caption' => 'text',
                'active' => 'string',
            ],
            'services' => Service::paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
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
            'caption',
            'active',
        ]);

        $data['slug'] = $data['title'];

        Service::create($data);

        return redirect()->route('dashboard.services.index')->with(['success' => 'New Service Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('dashboard.services.show',  compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validateRequest($request);

        $service->title = $request->input('title');
        $service->slug = $service->title;
        $service->caption = $request->input('caption');
        $service->active = $request->input('active');

        $service->save();

        return redirect()->route('dashboard.services.index')->with(['success' => 'Service Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard.services.index')->with(['success' => 'Service Deleted']);
    }

    /**
     * @return void
     */
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required|string|max:191',
            'caption' => 'required|string',
            'active' => 'required',
        ]);
    }
}
