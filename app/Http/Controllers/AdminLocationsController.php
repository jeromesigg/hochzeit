<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Location;
use Illuminate\Http\Request;
use Spatie\Geocoder\Facades\Geocoder;
use Illuminate\Support\Facades\Storage;

class AdminLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(10);
        return view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $geocode = Geocoder::getCoordinatesForAddress($input['street'] . ', ' . $input['plz'] . ' '. $input['city']);
        $input['lat'] = $geocode['lat'];
        $input['lng'] = $geocode['lng'];
        
        $input['link'] = 'https://maps.google.com/?q='. $geocode['lat'] . ',' . $geocode['lng'];

        $url = 'https://maps.googleapis.com/maps/api/staticmap?&center='. $geocode['lat'] . ',' . $geocode['lng'] . '&zoom=13%&size=200x200&maptype=roadmap&markers=color:red%7C';
        $url = $url . $geocode['lat'] . ',' . $geocode['lng'] . '&key=' . env('GOOGLE_MAPS_GEOCODING_API_KEY');
        $image = file_get_contents($url);
        $folder = 'images/'; 
        $name = time().$input['name'].'.png';
        $path = $folder.$name;
        Storage::disk('public')->put($path, $image);
        $photo = Photo::create(['file'=>$name]);

        
        $input['photo_id'] = $photo->id;

        Location::create($input);

        return redirect('/admin/locations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
