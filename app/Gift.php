<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    //
    protected $fillable = [
        'name',
        'photo_id',
        'subline',
        'description',
        'amount',
        'paid'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
