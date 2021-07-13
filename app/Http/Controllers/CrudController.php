<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Crud;

class CrudController extends Controller
{
    
    public function index() {
        $result['data'] = Blog::all();

        // echo "<pre>";

        // print_r($result);

        return view("blog.blog", $result);
    }

}
