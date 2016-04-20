<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use DB;

class PostsController extends Controller
{
    public function create() {
    	return View::make('posts.create');
    }
    public function posts() {
    	return view ('registration');
    }
    public function upload(Request $request) {

    	$name = $request->name;
    	$address = $request->address;

    	if (!empty($name) && !empty($address)) {
    		echo "Ookayy";
    		DB::table('post_files')->insert(['name'=>$name, 'address'=>$address]);
    	}

		if (Input::hasFile('file')){
			echo "Uploaded";	
			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
		} else {
			echo "No files attached";
			return back();
		}


    	
    }
}
