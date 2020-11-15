<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'name', 'subline', 'description', 'street', 'plz', 'city', 'link', 'lat', 'lng', 'photo_id', 'invited'
    ];

    protected $casts = [
        'invited' => 'boolean'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
