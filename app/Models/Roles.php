<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    // public $table='Role';
    public function User(){

        return $this->belongsToMany('App\User');
       }
}
