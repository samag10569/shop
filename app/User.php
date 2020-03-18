<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // ======================================================
    public function Roles(){

        return $this->belongsToMany('App\Models\Roles');
       }

// =============================================================

public function Photo(){

        return $this->morphMany('App\Models\Photo','imageable');
       }

// =============================================================
    //    public function getFileImageAttribute($value){

    //     return "/images/users/".$value;

    //    }
// ================================================================
    public function isAdmin(){

        if(isset($this->Roles[0])&& $this->Roles[0]->name=="Adminstrator"){
            return true;
        }else
        {
            return false;
        }

    }
// =======================================================================




}
