<?php

namespace App\Http\Controllers;

use App\Gift;
use App\GuestGift;
use Illuminate\Http\Request;

class GuestGiftController extends Controller
{
    public function create()
    {
  
        // return view('index');
    }
    
    //
    public function store(Request $request) { 
        $input = $request->all();
        // Mail::send('emails.send',  $input, function($message){
        //     $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Test');
        // });
        $gift = Gift::findOrFail($input['gift_id']);
        $amount = $gift['paid']+$input['amount'];
        $gift->update(['paid'=> $gift['paid']+$input['amount']]);
        GuestGift::create($input);      
        return redirect()->back()->with('success', 'Vielen Dank für das Geschenk.');
    
      }
}
