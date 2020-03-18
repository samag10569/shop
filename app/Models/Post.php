<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Photo(){

        return $this->morphMany('App\Models\Photo','imageable');

    }
    public function Tag(){

        return $this->morphToMany('App\Models\Tag','taggable');

    }
    public function getFileImageAttribute($value){

        return "/images/posts/".$value;
    }
}
