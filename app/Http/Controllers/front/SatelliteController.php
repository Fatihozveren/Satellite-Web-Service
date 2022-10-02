<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class SatelliteController extends Controller
{
    public function index(){

        return view('front.pages.satellite');
    }
}
