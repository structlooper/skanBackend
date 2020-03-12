<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    /**
     *  The attributes that are mass assignable.
     *  @by 
     */
    protected $fillable = [
        'subject' , 'url' , 'method' , 'ip' , 'agent' , 'user_id'
    ];


}
