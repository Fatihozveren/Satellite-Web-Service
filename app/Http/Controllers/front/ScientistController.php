<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Satellite;
use App\Models\Scientist;

class ScientistController extends Controller
{
    public function index(){

        $scientist=Scientist::all();
        $satellite=Satellite::all();
        return view('front.pages.scientist', compact('scientist','satellite'));
    }
}
