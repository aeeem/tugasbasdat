<?php

namespace Kepolisian\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Kepolisian\Http\Requests\PostCreateRequest;
use Kepolisian\Http\Requests\PostEditRequest;
use Kepolisian\Post;
use Kepolisian\Tags;
use Alert;
use Kepolisian\User;
class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $post = Post::all();
        
        return view('admin.posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag=Tags::all();
       return view('admin.posts.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
      $input= new Post($request->all());
      $user=Auth::user();
    
      $user->posts()->save($input);
      $tag=$request->tags;
      $input->tags()->attach($tag);
      Alert::success("tersimpan");
      return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $tags=Tags::all();

        $tags2=array();
        foreach ($tags as $tag) {
            $tags2[$tag->id]=$tag->nama;
        }
   
        return view('admin.posts.edit')->withPost($post)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditRequest $request, $id)
    {
        $input=$request->all();
        $post=Post::findOrFail($id);
        $post->save($input);
        $tag=$request->tags;
        $post->tags()->Detach($tag);
        $post->tags()->attach($tag);
        return redirect('/admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Post::findOrFail($id)->delete();
        
        Alert::success("success deleted");
        return  back();
    }
}
