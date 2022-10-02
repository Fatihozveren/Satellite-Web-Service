<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\LaunchPad;
use App\Models\Satellite;
use App\Models\Scientist;

class FrontController extends Controller
{
    public function index(){

        $all_satellites = Satellite::all();
        $all_satellites_count = $all_satellites->count();
        $future_satellites = Satellite::where('status', 'like', '%future%')->get();
        $future_satellites_count = $future_satellites->count();
        $past_satellites = Satellite::where('status', 'like', '%completed%')->get();
        $past_satellites_count = $past_satellites->count();
        $scientist_count=Scientist::all()->count();
        $launchpad=LaunchPad::all()->count();
        return view('front.pages.home', compact('all_satellites', 'future_satellites', 'past_satellites','past_satellites_count','future_satellites_count','all_satellites_count','scientist_count','launchpad'));
    }

    public function about(){

        return view('front.pages.about');
    }
}
