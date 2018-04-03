<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Session;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id')->all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Auth::user()->posts()->create($request->all());
//        Post::create($request->all());

        Session::flash('message', 'Post added!');
        Session::flash('status', 'success');

        return redirect()->route('posts.index');

//        foreach ($request->file('photos') as $photo) {
//            echo $photo->getClientOriginalName();
//    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('backEnd.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::pluck('title','id')->all();
        return view('admin.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $post = Post::findOrFail($id);

//        if returned instance has translation locale, then update() post translation

        if($post->hasTranslation()) {
            $post->update($request->all());
            return redirect()->route('posts.index');
        }
//        otherwise save () post translation
        else {
            $post->translateOrNew(\App::getLocale())->title = $request->title;
            $post->translateOrNew(\App::getLocale())->content = $request->content;
            $post->save();
            return redirect()->route('posts.index');
        }

        Session::flash('message', 'Post updated!');
        Session::flash('status', 'success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('message', 'Post deleted!');
        Session::flash('status', 'success');

        return redirect('posts');
    }

}
