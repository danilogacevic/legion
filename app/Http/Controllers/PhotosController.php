<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PhotosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('backEnd..index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd..create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Photo::create($request->all());

        Session::flash('message', 'Photo added!');
        Session::flash('status', 'success');

        return redirect('');
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
        $ = Photo::findOrFail($id);

        return view('backEnd..show', compact(''));
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
        $ = Photo::findOrFail($id);

        return view('backEnd..edit', compact(''));
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
        
        $ = Photo::findOrFail($id);
        $->update($request->all());

        Session::flash('message', 'Photo updated!');
        Session::flash('status', 'success');

        return redirect('');
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
        $ = Photo::findOrFail($id);

        $->delete();

        Session::flash('message', 'Photo deleted!');
        Session::flash('status', 'success');

        return redirect('');
    }

}
