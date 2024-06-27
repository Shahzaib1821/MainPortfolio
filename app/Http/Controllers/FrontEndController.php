<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
