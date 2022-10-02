<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class ScientistController extends Controller
{
    public function index(){

        return view('front.pages.scientist');
    }
}
