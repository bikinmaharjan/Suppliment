<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplement;
use App\Company;
use App\Micro_Nutrient;
use App\Suppliment_Ingredient;

class SupplementController extends Controller
{
    public function index()
    {
        $supplements = Supplement::all();
        $companies = Company::all();
        $micro_nutrients = Micro_Nutrient::all();
        $supplement_ingredients = Suppliment_Ingredient::all();
        return view('test', compact('supplements', 'companies', 'micro_nutrients', 'supplement_ingredients'));

        
        # code...
    }

    public function company()
    {
        return $this->belongsTo('App\Company', 'foreign_key', 'other_key');
    }

    public function update(Request $request,$id){
        $ingredients =[];
        foreach($id as $ids){
            $ingredients += DB::select('select * from suppliment_ingredients where supplement_id = ?', $id);
            
        }
        return(compact('ingredients'));
        
    }

    public function test(){
        
    }

    public function store(){
        return view('test');
    }


   

    //
}
