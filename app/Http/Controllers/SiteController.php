<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Service $service, Project $project, Client $clients)
    {
        return view('site.index', [
            'services' => Service::where('active', 1)->get(),
            'projects' => Project::where('active', 1)->latest()->get(),
            'clients' => Client::where('active', 1)->get(),
        ]); 
    }

    public function showContactPg()
    {
        return view('site.contact');
    }
}
