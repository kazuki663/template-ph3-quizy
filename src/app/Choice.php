<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function scopeSearchChoices($query, $id)
    {
        return $query->where('question_id', $id);
    }

    public function scopeSearchValid($query, $num)
    {
        return $query->where('valid', $num);
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
