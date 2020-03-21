<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class McqsCategoryQuestionData extends Model
{
    protected $table = 'mcqs_category_question_data';
    protected $fillable = [
        'category','questionName','timeDuration',
    ];

}
