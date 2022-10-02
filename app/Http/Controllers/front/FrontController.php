<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Satellite;

class FrontController extends Controller
{
    public function index(){
        $all_satellites = Satellite::all();
        $future_satellites = Satellite::where('status', 'like', '%future%')->get();
        return view('front.pages.home', compact('all_satellites', 'future_satellites'));
    }

    public function about(){

        return view('front.pages.about');
    }
}
