<?php

namespace Kepolisian\Http\Controllers;

use Illuminate\Http\Request;
use Kepolisian\Post;

class Welcome_Controller extends Controller
{
    public function welcome(){
    	$post = Post::all();

    	return view('welcome')->withPost($post);
    }

    public function show($id)
    {
    	$posts= Post::findOrFail($id);
    	// dd($posts);
    	return view('show-post',compact('posts'));

    }
}
