<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});


/*
Route::group(["prefix"=> "site"], function() {
    Route::get('/about', function() {
        return "<h1>About Us</h1>";
    });

    Route::get('/contact', function(){
        return "<h1>Contact Us</h1>";
    });

    //pass variable
    Route::get('/user/{id}', function($id){
        return $id;
    });
});
*/


Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');



//if page not found
Route::fallback(function() {
    return "<h1>No page founded</h1>";
});
