<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function scopeSearchQuestions($query, $id)
    {
        return $query->where('big_question_id', $id);
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
}
