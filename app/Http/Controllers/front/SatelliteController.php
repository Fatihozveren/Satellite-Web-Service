<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Satellite;

class SatelliteController extends Controller
{
    public function index(){

        $satellite=Satellite::all();
        $satellite_date=Satellite::orderBy('launch_date', 'ASC')->get();
        return view('front.pages.satellite', compact('satellite','satellite_date'));
    }
}
