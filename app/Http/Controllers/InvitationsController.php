<?php

namespace App\Http\Controllers;

use App\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationsController extends Controller
{
    //
    public function create()
    {
  
        // return view('index');
    }
  
    public function store(Request $request) { 
      $input = $request->all();
      $email = $input['email'];
      $name = $input['name'];
      $invitation = Invitation::create($input); 
      $input['response'] = $invitation->response['name'];
      Mail::send('emails.send_invitation',  $input, function($message) use($email, $name){
          $message->to($email, $name)->subject('Kopie deiner Anmeldung zur Hochzeit von Stefanie Sigrist und Jérôme Sigg');
      });
      Mail::send('emails.send_invitation',  $input, function($message) use($email, $name){
        $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Anmeldung Hochzeit');
      });
      return redirect()->back()->with('success', 'Vielen Dank für die Anmeldung.');
  
    }
}
