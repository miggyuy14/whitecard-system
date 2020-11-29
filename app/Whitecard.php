<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Whitecard extends Model
{
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id'); //relationship between user and whitecard
    }

    protected $table = 'whitecards';
    protected $guarded = [''];
}
