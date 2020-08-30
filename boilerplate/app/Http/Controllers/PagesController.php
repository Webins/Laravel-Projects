<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getContact(){
        return view('contact');
    }

    public function getAbout(){
        return view('about');
    }

}
