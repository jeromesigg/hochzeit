<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestGift extends Model
{
    //
    protected $fillable = [
        'firstname',
        'name',
        'content',
        'gift_id',
        'amount'
    ];

    public function gift(){
        return $this->belongsTo('App\Gift');
    }
}
