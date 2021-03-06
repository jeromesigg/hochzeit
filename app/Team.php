<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'name',
        'photo_id',
        'title',
        'description',
        'phone'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
