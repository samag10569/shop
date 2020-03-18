<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{

    // use SoftDeletes;
 protected  $fillable=['name','category_id','price','created_at','fileimage'];

    public function Basket(){

        return $this->hasMany('App\Models\Basket');

    }
    // ==============================================
    public function Image(){

        return $this->hasMany('App\Models\Image');

    }
    public function getFileImageAttribute($value){

        return "/images/kalas/".$value;
     }

    // =================================================
    // public function Category(){

    //     return $this->belongsTo('App\Models\Category');
    //    }
    //  ===============================================
    public function Factor(){

        return $this->belongsToMany('App\Models\factor_kala');

    }
// =============================================================

public function Category(){

    return $this->belongsToMany('App\Models\Category','categoryable');

}
}
