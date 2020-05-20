<?php

namespace App\Http\Controllers;

use App\Album;
use App\Location;
use App\Picture;
use App\Response;
use App\Story;
use App\Shedule;
use App\Team;

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
        $pictures = Picture::all();
        $albums = Album::all();
        $locations = Location::all()->sortBy('name');
        $responses = Response::pluck('name','id')->all();
        $teams = Team::all()->sortBy('name');
        return view('home', compact('stories', 'shedules','pictures', 'albums', 'locations', 'responses', 'teams'));
    }
}
