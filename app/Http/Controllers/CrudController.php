<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Crud;
use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{


    public function index() {

        // $users = DB::connection('mysql')->select("SELECT * FROM  task_list");

        // echo "<pre>";

        // print_r($users);
        // die;
        $result['data'] = Blog::all();

        // echo "<pre>";

        // print_r($result);

        return view("blog.blog", $result);
    }

    public function loadForm() {

        return view('blog.create_blog');
    }

    public function manageBlog(Request $request) {

        $validated = $request->validate([
            'Title' => 'required',
            'source' => 'required',
            'description' => 'required',

        ]);
        $blog = new Blog();
        $blog->title = $request->Title;
        $blog->source = $request->source;
        $blog->description = $request->description;
        $blog->save();

        $request->session()->flash('message','Blog Created');
        return redirect('blog');

        //return view('blog.blog');
    }

    public function editBlog($id) {

       // echo $request->get('id');
        $result['data'] = Blog::find($id);
        return view("blog.edit", $result);

    }

    public function updateBlog(Request $request) {

        $validated = $request->validate([
            'Title' => 'required',
            'source' => 'required',
            'description' => 'required',

        ]);

        $blog = Blog::find($request->post('uid'));
        $blog->title = $request->Title;
        $blog->source = $request->source;
        $blog->description = $request->description;
        $blog->save();

        $request->session()->flash('message','Blog Updated');
        return redirect('blog');
    }

    public function deleteBlog(Request $request, $id) {

        $blog = Blog::find($id);
        $blog->delete();

        $request->session()->flash('message','Blog Deleted');
        return redirect('blog');
    }



}
