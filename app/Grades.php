<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo('App\Student', 'stud_id');
    }
}
