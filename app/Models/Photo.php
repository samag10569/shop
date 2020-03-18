<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable= ['name','imageable_id','imageable_type'];


public function imageable(){
    return $this->morphTo();
}

public function getNameAttribute($value){

    return "/images/users/".$value;

   }

}
