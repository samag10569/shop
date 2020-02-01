<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Kala(){

        return $this->belongsTo('App\Models\Kala');
       }
}
