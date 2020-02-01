<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function User(){

        return $this->belongsTo('App\Models\User');

    }


    public function Kala(){

        return $this->belongsTo('App\Models\Kala');

    }

}
