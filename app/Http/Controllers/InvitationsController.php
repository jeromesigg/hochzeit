<?php

namespace App\Http\Controllers;

use App\Invitation;
use Illuminate\Http\Request;

class InvitationsController extends Controller
{
    //
    public function create()
    {
  
        // return view('index');
    }
  
    public function store(Request $request) { 
      $input = $request->all();
      // Mail::send('emails.send',  $input, function($message){
      //     $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Test');
      // });
      Invitation::create($input);      
      return redirect()->back()->with('success', 'Vielen Dank für die Anmeldung.');
  
    }
}
