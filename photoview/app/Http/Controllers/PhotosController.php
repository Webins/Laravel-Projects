<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('photos.create')->with('album_id', $album_id);
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
            'title' => 'required',
            'photo' => 'image|max:1999'
        ]);

        /*Get the complete filename*/
        $complete_filename = $request->file('photo')->getClientOriginalName();
        /*Get the filename without ext */
        $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
        /*get extension */
        $extension = $request->file('photo')->getClientOriginalExtension();

        $filename_to_db = $filename . '_'. time() . '.' .$extension;
        
        /*Store the actual image in the store folder of laravel */
        $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filename_to_db);
        
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->photo = $filename_to_db;
        $photo->size = $request->file('photo')->getSize();
            
        $photo->save();

        return redirect('/album/'.$request->input('album_id'))->with('success', 'Photo Uploaded Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $photo = Photo::find($id);
         return view('photos.show')->with('photo', $photo);
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
        $photo = Photo::find($id);

        if(Storage::delete('public/photos'.$photo->album_id.'/'.$photo->photo));

        $photo->delete();

        return redirect('/album/'.$photo->album_id)->with('success', 'Photo Deleted Successfully');
    }
}
