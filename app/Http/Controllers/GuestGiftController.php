<?php

namespace App\Http\Controllers;

use App\Gift;
use App\GuestGift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuestGiftController extends Controller
{
    public function create()
    {
  
        // return view('index');
    }
    
    //
    public function store(Request $request) { 
        $input = $request->all();
        $email = $input['email'];
        $name = $input['name'];

        $gift = Gift::findOrFail($input['gift_id']);
        $amount = $gift['paid']+$input['amount'];
        $gift->update(['paid'=> $amount]);
        GuestGift::create($input);      
        $input['gift'] = $gift['name'];
        Mail::send('emails.send_gift',  $input, function($message) use($email, $name){
            $message->to($email, $name)->subject('Kopie deines Hochzeitsgeschenks zur Hochzeit von Stefanie Sigrist und Jérôme Sigg');
        });
        Mail::send('emails.send_gift',  $input, function($message) use($email, $name){
          $message->to('jerome.sigg@gmail.com', 'Jerome')->subject('Spende Hochzeit');
        });
        return redirect()->back()->with('success', 'Vielen Dank für das Geschenk.');
    
      }
}
