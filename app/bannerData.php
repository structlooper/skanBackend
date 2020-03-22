<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bannerData extends Model
{
    protected $table = 'banner_datas';
    protected $fillable = ['heading','desc','image'];
}
