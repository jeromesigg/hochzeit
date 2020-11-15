<?php

namespace App\Http\Controllers;

use App\Gift;
use App\Team;
use App\Album;
use App\Story;
use App\Picture;
use App\Shedule;
use App\Location;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $stories = Story::all()->sortBy('date');
        $shedules = Shedule::where('invited',$user->IsInvited())->orWhere('invited',false)->get()->sortBy('time');
        $pictures = Picture::paginate(6);
        // $pictures->withPath('#photos');
        $albums = Album::all();
        $locations = Location::where('invited',$user->IsInvited())->orWhere('invited',false)->get()->sortBy('name');
        $responses = Response::where('invited',$user->IsInvited())->orWhere('invited',false)->pluck('name','id')->toArray();
        $gifts_select = Gift::where('paid', '<', 'amount')->orWhereNULL('amount')->pluck('name','id')->toArray();
        $teams = Team::all()->sortBy('name');
        $gifts = Gift::all();
        return view('home', compact('stories', 'shedules','pictures', 'albums', 'locations', 'responses', 'teams', 'gifts','gifts_select'));
    }
}
