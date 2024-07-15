<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        return view('pages.home', compact('projects'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('pages.portfolio', compact('projects'));
    }

    public function singleProject($id)
    {
        $project = Project::find($id);
        return view('pages.single-project', compact('project'));
    }

    public function services()
    {
        return view('pages.services');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
