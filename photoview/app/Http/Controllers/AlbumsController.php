<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('home')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'cover_img' => 'image|max:1999'
        ]);

        /*Get the complete filename*/
        $complete_filename = $request->file('cover_image')->getClientOriginalName();
        /*Get the filename without ext */
        $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
        /*get extension */
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        $filename_to_db = $filename . '_'. time() . '.' .$extension;
        
        /*Store the actual image in the store folder of laravel */
        $request->file('cover_image')->storeAs('public/album_covers', $filename_to_db);
        
        $album = new Album;

        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filename_to_db;
            
        $album->save();

        return redirect('/albums')->with('success', 'Album created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album', $album);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
