<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HousesController extends Controller
{
    public function index(Request $request){
        
        $House = new House;
        $houses = $House
        ->getRequest($request)
        ->search();
        
        return view('home', [
            'houses' => $houses
        ]);
    }

    public function filterJson(Request $request){

        $House = new House;

        return $houses = $House
        ->getRequest($request)
        ->search();
    }
}
