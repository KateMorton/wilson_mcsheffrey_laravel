<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class File extends Model
{
    public function post () {
        return $this->belongsTo('App\Post');
     }
}
