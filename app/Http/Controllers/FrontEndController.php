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
    public function portfolio(){
        $projects = Project::all();
        return view('pages.portfolio', compact('projects'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
