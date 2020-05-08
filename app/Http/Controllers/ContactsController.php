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
    Mail::send('emails.send',  $input, function($message){
        $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Test');
    });
    Contact::create($input);      
    return redirect()->to(url()->previous() . "#contact")->with('success', 'Vielen Dank für die Nachricht');

  }
}