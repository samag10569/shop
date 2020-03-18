<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    // public $timestamps=false;
    use Notifiable;
    protected $fillable=['name','email','password'];
    // ======================================================

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
        // ==================================================
        public function Role(){

            return $this->belongsToMany('App\Models\Role','roles_users');
           }

        public function isAdmin(){

            if(isset($this->Role[0])&& $this->Role[0]->name=="Adminstrator"){
                return true;
            }else
            {
                return false;
            }

        }


}
