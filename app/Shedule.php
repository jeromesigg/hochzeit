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
        'location_id',
        'icon',
        'invited'
    ];

    protected $casts = [
        'invited' => 'boolean'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }
}
