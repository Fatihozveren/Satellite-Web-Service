<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Satellite;

class SatelliteController extends Controller
{
    public function index(){

        $satellite=Satellite::all();
        return view('front.pages.satellite', compact('satellite'));
    }
}
