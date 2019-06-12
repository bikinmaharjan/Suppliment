<?php

namespace App\Http\Controllers;

use App\Supplement;
use App\Supplement_Ingredient;
use App\Micro_Nutrient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calculate');
        //
    }

    public function store()
    {
        $search = $_POST['text'];
        $micros = DB::select('select * from gender');

        // $age = $_POST['age'];
        // $gender = $_POST['gender'];
        // $sum = array_fill(0,30,0);

        // foreach($_POST['item'] as $value){
        //     if($value == "None"){
        //         echo"You Need to select a product!";
        //     }


        // }
        return view('calculate', compact('micros'),'search');
        //return view('calculate', compact('sum','max','over'));
    }

    public function s(Request $r){
        if(isset($_POST['submit'])){
            if(!empty($_POST['check_list'])){
                foreach($_POST['check_list'] as $selected){
                    echo $selected. "</br>";
                }
            }
        }
        return view('final');
    }
    
}