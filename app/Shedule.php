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
        'content',
        'link',
        'location_id',
        'icon'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }
}
