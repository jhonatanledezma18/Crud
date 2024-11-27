<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //uno a uno
    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }
    //uno a muchos
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    //muchos a muchos
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
}
