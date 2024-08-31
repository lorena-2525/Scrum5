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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        \Log::info('Checking authentication status: ' . auth()->check());
        if (auth()->check()) {
            return view('Inicio');
        } else {
            return redirect('/login')->with('error', 'Authentication failed');
        }
    }
    
}
