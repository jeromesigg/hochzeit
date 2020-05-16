<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //

    protected $fillable = [
        'year',
        'photo_id',
        'title',
        'content'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
