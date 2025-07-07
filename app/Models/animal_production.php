<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class animal_production extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\user_app');

    }
    public function finance(){
        return $this->hasOne('App\Models\finance');

        
    }
    public function cattles(){
        return $this->hasMany('App\Models\cattle');
        
        
    }
    public function hens(){
        return $this->hasMany('App\Models\hen');
        
        
    }
   
    
}
