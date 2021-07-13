<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {
        
        return view('list');

    }

    public function getData() {
        echo "Get Data";
    }

}
