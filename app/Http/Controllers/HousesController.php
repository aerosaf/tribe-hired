<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HousesController extends Controller
{
    public function index(Request $request){
        
        $house = new House;
        
        return view('home', [
            'houses' => $house::search($request)
        ]);
    }

    public function filterJson(Request $request){

        $house = new House;

        return $house::search($request);
    }
}
