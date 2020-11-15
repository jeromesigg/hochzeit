<?php

namespace App\Http\Controllers;

use App\GuestGift;
use Illuminate\Http\Request;

class AdminGuestGiftsController extends Controller
{
    //
    public function index()
    {
        //
        $guestgifts = GuestGift::paginate(10);
        return view('admin.guestgifts.index', compact('guestgifts'));
    }
}
