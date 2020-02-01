<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public function User(){

        return $this->belongsTo('App\Models\User');
       }
    // ===================================================
    public function Kala(){

        return $this->belongsToMany('App\Models\factor_kala');

    }



}
