<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.projects.index', [
            'columns' => [
                'title' => 'text',
                'body' => 'text',
                'technology' => 'text',
                'active' => 'string',
            ],
            'projects' => Project::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');
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
            'body',
            'technology',
            'active',
        ]);
        $data['slug'] = $data['title'];

        $project = Project::create($data);

        if($request->hasFile('image')){
            $project->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return redirect()->route('dashboard.projects.index')->with(['success' => 'Project Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('dashboard.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validateRequest($request);

        $project->title = $request->input('title');
        $project->slug = $project->title;
        $project->body = $request->input('body');
        $project->technology = $request->input('technology');
        $project->active = $request->input('active');

        $project->save();

        
        if($request->hasFile('image')){
            if($image = $project->getFirstMedia('image')){
                $image->delete();
            }
            $project->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('dashboard.projects.index')->with(['success' => 'Project Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard.projects.index')->with(['success' => 'Project Deleted']);
    }

    /**
     * 
     * @return void
     */
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required|string|max:191',
            'body' => 'required|string',
            'technology' => 'required|string',
            'active' => 'required',
        ]);
    }
}
