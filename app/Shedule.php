<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    //
    protected $fillable = [
        'time',
        'photo_id',
        'title',
        'body',
        'link'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
