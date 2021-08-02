<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 	
 	public function index() {
 		return view('admin.login');

 	}

    public function adminDashBoard() {

    	return view('admin.dashboard');

    }

}
