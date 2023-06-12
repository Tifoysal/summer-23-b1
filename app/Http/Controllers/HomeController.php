<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {

       return view('backend.dashboard');
    }

    public function categories()
    {
        return view('backend.pages.categories');
    }
}
