<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
//    public function users_apps(){
//         return $this->belongsToMany('App\Models\user_app');
        
//     }
public function userApps()
{
    return $this->belongsToMany(user_app::class);
    
}

    public function animal_production(){
        return $this->belongsTo('App\Models\animal_production');
        
    }



}
