<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Scientist;

class ScientistController extends Controller
{
    public function index(){

        $scientist=Scientist::all();
        return view('front.pages.scientist', compact('scientist'));
    }
}
