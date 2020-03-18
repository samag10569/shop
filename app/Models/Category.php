<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function Kala(){
       return $this->hasMany('App\Models\Kala');
   }


   public function categoryable(){
    return $this->morphTo();
}



}
