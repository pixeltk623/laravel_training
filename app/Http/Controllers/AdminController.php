<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
 	
 	public function index() {
 		return view('admin.login');

 	}

    public function adminDashBoard() {

    	return view('admin.dashboard');

    }

    public function auth(Request $request) {

    	$username = $request->post('username');
    	$password = $request->post('password');

    	$result = Admin::where(['username'=>$username])->first();


    	if($result) {
    		if(Hash::check($password, $result->password)) {

    			$request->session()->put('Login_User', true);

                $request->session()->put('Login_id', $result->id);
                
                return redirect('dashboard');
    		
    		} else {
    			$request->session()->flash('error', 'Please Enter Valid Password');
                return redirect('login');
    		}
    	} else {

    		$request->session()->flash('error', 'Please Enter Valid UserName');
                return redirect('login');
    	}

    	// echo "<pre>";

    	// print_r($result);
    }

    public function updatePassword() {    	

    	$data = Admin::find(1);
    	$data->password = Hash::make('123456');
    	$data->save();

    }

}
