<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coffe_crop extends Model
{
    public function crop(){
        return $this->belongsTo('App\Models\crop');

    }
    
}
