<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crop extends Model
{
    public function user_apps(){
        return $this->belongsToMany('App\Models\user_app');

    }
    public function avocado_crop(){
        return $this->hasOne('App\Models\avocado_crop');
        
    }
    public function coffe_crop(){
        return $this->hasOne('App\Models\coffe_crop');
        
    }
 

}
