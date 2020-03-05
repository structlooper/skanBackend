<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privacyPolicy extends Model
{
    protected $table = 'privacy_policies';
    protected $fillable = ['content'];
}
