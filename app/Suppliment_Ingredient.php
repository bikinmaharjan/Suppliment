<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliment_Ingredient extends Model
{
    protected $table = 'supplement_ingredient';

    public function micro_nutrient(){
        return $this->belongsTo('App\Micro_Nutrient', 'micro_nutrient_id');
    }

    public function supplement(){
        return $this->belongsTo('App\Supplement', 'supplement_id');
    }
    //
}
