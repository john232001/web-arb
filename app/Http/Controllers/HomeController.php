<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('homepage.home');
    }
    public function aboutus()
    {
        return view('homepage.about');
    }
    public function darleaders()
    {
        return view('homepage.darleaders');
    }
    public function services()
    {
        return view('homepage.services');
    }
}
