<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    protected $table = 'supplement';

    public $timestamps = false;

    protected $fillable = [];

    public function company(){
        return $this->belongsTo('App\Company', 'company_id');
    }
     
    public function supplement_ingredient(){
        return $this->hasMany('App\Suppliment_Ingredient', 'micro_nutrient_id');
    }
    
}

