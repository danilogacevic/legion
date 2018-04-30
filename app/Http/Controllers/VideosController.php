<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class VideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $video = Video::create($request->all());

        if($request->file('photo')) {

                $photo = $request->file('photo');

                $name = time() . $photo->getClientOriginalName();

                $photo->move('media',$name);

                $video->photo()->create(['file'=>$name]);

        }

        Session::flash('message', 'Video added!');
        Session::flash('status', 'success');

        return redirect()->route('videos.index');
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
        $video = Video::findOrFail($id);

        return view('backEnd.videos.show', compact('video'));
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
        $video = Video::findOrFail($id);

        return view('backEnd.videos.edit', compact('video'));
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
        
        $video = Video::findOrFail($id);
        $video->update($request->all());

        Session::flash('message', 'Video updated!');
        Session::flash('status', 'success');

        return redirect('admin/videos');
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
        $video = Video::findOrFail($id);

        unlink(public_path() . $video->photo->file);

        $video->photo()->delete();

        $video->delete();

        Session::flash('message', 'Video deleted!');
        Session::flash('status', 'success');

        return redirect()->route('videos.index');
    }

}
