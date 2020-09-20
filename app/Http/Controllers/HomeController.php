<?php

namespace App\Http\Controllers;

use App\Team;
use App\Album;
use App\Gift;
use App\Story;
use App\Picture;
use App\Shedule;
use App\Location;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
        $pictures = Picture::paginate(6);
        // $pictures->withPath('#photos');
        $albums = Album::all();
        $locations = Location::all()->sortBy('name');
        $responses = Response::pluck('name','id')->all();
        $gifts_select = Gift::pluck('name','id')->all();
        $teams = Team::all()->sortBy('name');
        $gifts = Gift::all();
        return view('home', compact('stories', 'shedules','pictures', 'albums', 'locations', 'responses', 'teams', 'gifts','gifts_select'));
    }
}
