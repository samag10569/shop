<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public function Basket(){

        return $this->hasMany('App\Models\Basket');

    }
    // ==============================================
    public function Image(){

        return $this->hasMany('App\Models\Image');

    }
    // =================================================
    public function Category(){

        return $this->belongsTo('App\Models\Category');
       }
    //  ===============================================
    public function Factor(){

        return $this->belongsToMany('App\Models\factor_kala');

    }


}
