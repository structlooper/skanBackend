<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bannerData extends Model
{
    protected $table = 'Banner_datas';
    protected $fillable = ['heading','desc','image'];
}
