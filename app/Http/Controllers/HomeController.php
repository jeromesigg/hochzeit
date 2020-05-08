<?php

namespace App\Http\Controllers;

use App\Story;
use App\Shedule;

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
        $stories = Story::all()->sortByDesc('year');
        $shedules = Shedule::all()->sortBy('time');
        return view('home', compact('stories', 'shedules'));
    }
}
