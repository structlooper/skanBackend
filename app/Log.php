<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     *  The attributes that are mass assignable.
     *  @by 
     */
    protected $fillable = [
        'subject' , 'url' , 'method' , 'ip' , 'agent' , 'user_id'
    ];


}
