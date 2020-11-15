<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'content',
        'response_id',
        'amount'
    ];

    public function response(){
        return $this->belongsTo('App\Response');
    }
}
