<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Post(){

        return $this->morphedByMany('App\Models\Post','taggable');

    }

    public function Video(){

        return $this->morphedByMany('App\Models\Video','taggable');

    }
}
