<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HousesController extends Controller
{
    public function index(){
        $houses = House::all();

        return view('home', [
            'houses' => $houses
        ]);
    }

    public function price(){
        $houses = House::orderBy('price')->get();

        return view('home', [
            'houses' => $houses
        ]);
    }

    public function rating(){
        $houses = House::orderBy('rating', 'desc')->get();

        return view('home', [
            'houses' => $houses
        ]);
    }

    public function quality(){
        $houses = House::orderBy('quality', 'desc')->get();

        return view('home', [
            'houses' => $houses
        ]);
    }
}
