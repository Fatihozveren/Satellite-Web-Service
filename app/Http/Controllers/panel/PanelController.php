<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use function view;

class PanelController extends Controller
{
    public function index(){
        return view('panel.homepage');
    }
}
