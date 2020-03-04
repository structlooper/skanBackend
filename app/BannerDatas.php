<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerDatas extends Model
{
    protected $table = 'Banner_datas';
    protected $fillable = ['heading','desc','image'];
}
