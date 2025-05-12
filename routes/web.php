<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


// Route::get('/user/{name?}',function($name='Guest'){
//    return "User name is " . $name;
// });

// Route::get('/contact/{id?}',function($id = '0'){
//     return "Contact Id is " . $id;
// });

// Normal Route

// Route::get('/test',[TestController::class,'goHome']);
// Route::get('/test/contact',[TestController::class,'goContact']);
// Route::get('/test/about',[TestController::class,'goAbout']);

Route::controller(TestController::class)->group(function(){
    Route::get('/test', 'goHome');
    Route::get('/test/contact','goContact');
    Route::get('/test/about','goAbout');
    Route::get('/test/detail/{id}', 'goDetail');
});

/* CRUD ROUTE*/

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/post',function(){
//     return view('posts');
// });

/* Group */

// Route::controller(MyController::class)->group(function(){
//     Route::get('/','goHome')->name('home');
//     Route::get('/about','goAbout')->name('about');
//     Route::get('/posts','goPost')->name('post');
// });
Route::controller(MyController::class)->group(function() {
    Route::get('/', [MyController::class, 'goHome'])->name("home");
    Route::get('/abou', [MyController::class, 'goAbout'])->name("about");
    Route::get('/pos', [MyController::class, 'goPost'])->name("posts");
    Route::get('/contact', [MyController::class, 'goContact'])->name("contact");
});
