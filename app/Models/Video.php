<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function Tag(){

        return $this->morphToMany('App\Models\Tag','taggable');

    }
}
