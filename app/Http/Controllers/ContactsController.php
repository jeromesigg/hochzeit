<?php

namespace App\Http\Controllers;


use App\Contact; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactsController extends Controller { 

  public function create()
  {

      // return view('index');
  }

  public function store(Request $request) { 
    $input = $request->all();
    $email = $input['email'];
    $name = $input['name'];
    $data = array('name'=>$name, 'email'=>$email, 'text'=> $input['content']);
    Mail::send('emails.send_contact',  $data, function($message) use($email, $name){
        $message->to($email, $name)->subject('Kopie deiner Nachricht an Stefanie Sigrist und Jérôme Sigg');
    });
    Mail::send('emails.send_contact',  $data, function($message) use($email, $name){
      $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Kontaktanfrage Hochzeit');
    });
    Contact::create($input);      
    return redirect()->back()->with('success', 'Vielen Dank für die Nachricht. Wir werden uns so schnell wie möglich melden.');

  }
}