<?php

namespace Kepolisian\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Kepolisian\Http\Requests\PostCreateRequest;
use Kepolisian\Http\Requests\PostEditRequest;
use Kepolisian\Post;
use Alert;
use Kepolisian\User;
use Kepolisian\Tags;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id','=', Auth::id())->get();
        return view('user.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag=Tags::all();
       return view('user.post.create')->withTag($tag);
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
      return redirect('/user/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $post=Post::findOrFail($id);
         if($post->user_id == Auth::id()){
return view('user.post.show');
         }
         return abort(404);
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
         if($post->user_id == Auth::id()){
        $tags=Tags::all();

        $tags2=array();
        foreach ($tags as $tag) {
            $tags2[$tag->id]=$tag->nama;
        }
   
        return view('user.post.edit')->withPost($post)->withTags($tags2);}
        return abort(404);
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
        return redirect('/user/posts');
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
