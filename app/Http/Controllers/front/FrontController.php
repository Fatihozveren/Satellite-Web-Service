<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){

        return view('front.index');
    }

    public function about(){

        return view('front.pages.about');
    }
}
