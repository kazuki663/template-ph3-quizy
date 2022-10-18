<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );

    public function scopeHide($query)
    {
        return $query->where('hide', 0);
    }
}
