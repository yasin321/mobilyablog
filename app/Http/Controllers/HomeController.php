<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index');
    }
    public function about()
    {
        return view('site.about');
    }
    public function galery()
    {
        return view('site.galery');
    }
    public function contact()
    {
        return view('site.contact');
    }
}
