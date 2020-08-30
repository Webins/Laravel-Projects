<?php

use Illuminate\Support\Facades\Route;
use App\Album;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'AlbumsController@index');

Route::get('/create', 'AlbumsController@create');

Route::get('/albums', function(){
    $albums = Album::with('photos')->get();
    return view('albums.index')->with('albums', $albums);
});

Route::get('/album/{id}', 'AlbumsController@show');

Route::get('/photos/create/{id}', 'PhotosController@create');

Route::get('/photos/{id}', 'PhotosController@show');

Route::delete('/photos/{id}', 'PhotosController@destroy');

Route::post('/albums/store', 'AlbumsController@store');

Route::post('/photos/store', 'PhotosController@store');