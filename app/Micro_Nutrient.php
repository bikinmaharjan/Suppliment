<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micro_Nutrient extends Model
{
    protected $table = "micro_nutrient";

    public function supplement(){
        return $this->hasMany('App\Suppliment_Ingredient', 'id');
    }
    //
}
