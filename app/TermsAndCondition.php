<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class termsAndCondition extends Model
{
    protected $table = 'terms_and_conditions';
    protected $fillable = ['content'];
}
