<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalquimiaSiteHomeController extends Controller
{
    
    public function index() {

        return view('index-site');
    }

}
