<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function goHome()
    {
        return view('myPost.home');
    }
    public function goAbout()
    {
        return view('myPost.about');
    }
    public function goPost()
    {
        return view('myPost.posts');
    }
    public function goContact()
    {
        return view('myPost.contact');
    }

}
