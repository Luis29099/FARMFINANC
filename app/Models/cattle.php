<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cattle extends Model
{
    public function animal_production(){
        return $this->belongsTo('App\Models\animal_production');
        
    }
    
}
