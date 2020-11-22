<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Whitecard extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //relationship between user and whitecard
    }
}
