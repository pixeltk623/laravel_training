<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login() {

        $arrayData = array(
            array
            (
                "name" => "Sharvan Kumar",
                "email" => "s@gmail.com",
                "mobile" => "9835401515"
            ),
            array
            (
                "name" => "Sharvan Kumar",
                "email" => "s@gmail.com",
                "mobile" => "9835401515"
            ),
            array
            (
                "name" => "Sharvan Kumar",
                "email" => "s@gmail.com",
                "mobile" => "9835401515"
            ),
            array
            (
                "name" => "Sharvan Kumar",
                "email" => "s@gmail.com",
                "mobile" => "9835401515"
            ),
            array
            (
                "name" => "Sharvan Kumar",
                "email" => "s@gmail.com",
                "mobile" => "9835401515"
            )
        );

        return view('admin.login', ['data' => $arrayData]);
    }
}
