<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    public function user () {
       return $this->belongsTo('App\User');
    }

    public function file () {
        return $this->hasMany('App\File');
     }
}
