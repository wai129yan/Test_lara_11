<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function goHome()
    {
        return view('goHome',['name'=>'MgMg']);
    }

    public function goContact()
    {
        $users = ['name' => 'MgMg', 'age' => 20, 'address' => 'Yangon'];
        return view('goContact',compact('users'));
    }

    public function goAbout()
    {
        return view('goAbout', ['message' => 'Welcome To My User !']);
    }
    public function goDetail()
    {
        return view('goDetail');
    }
    //,['products'=>['phone','tablet','laptop']]
}