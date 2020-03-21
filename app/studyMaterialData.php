<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studyMaterialData extends Model
{
    protected $table = 'study_material_data';
    protected $fillable = ['created_by_user','category','source','title','desc','image','otherDocument'];
}
