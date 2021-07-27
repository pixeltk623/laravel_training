<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    
    public function index() {
    	$result['data'] = Blog::all();
    	return view("blog.blog", $result);
    }

    public function manage_blog(Request $request, $id='') {

    	if($id>0) {
    		$arrayData = Blog::where('id', $id)->get();
    		$result['title'] = $arrayData[0]->title;	
    		$result['source'] = $arrayData[0]->source;	
    		$result['description'] = $arrayData[0]->description;
    		$result['id'] = $id;	
    		
    	} else {

    		$result['title'] = '';	
    		$result['source'] = '';	
    		$result['description'] = '';
    		$result['id'] = 0;	
    	}

    	// echo "<pre>";

    	// print_r($result);
    	// die;

    	return view('blog.new_create', ['result' => $result]);
    }

    public function manage_process(Request $request) {

        $request->validate([
            'Title' => 'required',
            'source' => 'required',
            'description' => 'required',
            'fileUpload'=>'required|mimes:jpg,jpeg,png'
        ]);
        if($request->hasFile('fileUpload')) {
            $fileName = $request->file('fileUpload'); 
            $ext = $request->fileUpload->extension();
            $imageName = time(). ".".$ext;
           // $request->fileUpload->storeAs('public/images', $imageName);

            Storage::disk('public')->put('filename', $imageName);

        }
    	if ($request->post('uid')>0) {
            $blog = Blog::find($request->post('uid'));
            $message = 'Updated';
        } else {
            $blog = new Blog();
            $message = 'Created';
        }

        $blog->title = $request->Title;
        $blog->source = $request->source;
        $blog->description = $request->description;
        $blog->file = $imageName;
        $blog->save();

        $request->session()->flash('message', $message);
        return redirect('blogs');

    }

}
