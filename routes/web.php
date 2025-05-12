<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name?}',function($name='Guest'){
   return "User name is " . $name; 
});

Route::get('/contact/{id?}',function($id = '0'){
    return "Contact Id is " . $id;
});


// Route::get('/test',[TestController::class,'goHome']);
// Route::get('/test/contact',[TestController::class,'goContact']);
// Route::get('/test/about',[TestController::class,'goAbout']);


Route::controller(TestController::class)->group(function(){
    Route::get('/test', [TestController::class, 'goHome']);
    Route::get('/test/contact', [TestController::class, 'goContact']);
    Route::get('/test/about', [TestController::class, 'goAbout']);
    Route::get('/test/detail', [TestController::class, 'goDetail']);
});