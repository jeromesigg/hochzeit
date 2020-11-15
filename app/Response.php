<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    //
    protected $fillable = [
        'name',
        'invited'
    ];
    
    protected $casts = [
        'invited' => 'boolean'
    ];
}
