<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Shedule;
use Illuminate\Http\Request;
use App\Location;

class AdminShedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $shedules = Shedule::paginate(10);
        return view('admin.shedules.index', compact('shedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations = Location::pluck('name','id')->all();
        return view('admin.shedules.create', compact('locations'));
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
        // $input['icon'] = base64_encode($input['icon']);
        if($file = $request->file('photo_id')){
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            
            $input['photo_id'] = $photo->id;
        }
        Shedule::create($input);

        return redirect('/admin/shedules');
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
        $locations = Location::pluck('name','id')->all();
        $shedule = Shedule::findOrFail($id);
        return view('admin.shedules.edit', compact('shedule', 'locations'));
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
        $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            
            $input['photo_id'] = $photo->id;
        }
        Shedule::whereId($id)->first()->update($input);
        return redirect('/admin/shedules');
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
        $shedule = Shedule::findOrFail($id);
        if($shedule->photo){
            unlink(public_path() . $shedule->photo->file);
        }

        $shedule->delete();

        return redirect('/admin/shedules');
    }
}
