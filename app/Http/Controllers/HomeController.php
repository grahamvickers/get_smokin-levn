<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {   
        return view('home');
    }
}
