<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // public $timestamps=false;

    public function Gender(){

        return $this->belongsTo('App\Models\Gender');
       }
// =========================================================
       public function Basket(){

        return $this->hasMany('App\Models\Basket');

    }
// =========================================================
        public function Factor(){

            return $this->hasMany('App\Models\Factor');
        }
}
