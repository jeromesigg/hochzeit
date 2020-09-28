<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //

    protected $fillable = [
        'year',
        'photo_id',
        'title',
        'content',
        'date'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
