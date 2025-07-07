<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\animal_production;
use App\Models\avocado_crop;
use App\Models\cattle;
use App\Models\coffe_crop;
use App\Models\crop;
use App\Models\finance;
use App\Models\hen;
use App\Models\recommendation;
use App\Models\User;
use App\Models\user_app;
use Illuminate\Http\Request;


class OrmController extends Controller
{
    public function consultas(){
       $user = user_app::find(1);
       return $user->finances;
    // $coffe=coffe_crop::find(1)
    // return $coffe;
    // $crop = crop::find(2);
    // return $crop;
    // $hen=hen::find(1);
    // return $hen;
    // $recomendation=recommendation::find(1);
    // return $recomendation;
    // $avocado=avocado_crop::find(1);
    // return $avocado;
    // $animal_production=animal_production::find(1);
    // return $animal_production;
    // $cattle=cattle::find(1);
    // return $cattle;
    // $finance=finance::find(1);
    // return $finance;


    
    
    }
}

