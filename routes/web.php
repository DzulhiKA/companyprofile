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
//Home
Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});
// About
Route::get('/about', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data );
});
// Service  
Route::get('/services', function () {
    $data = [
        'content' => 'home/services/index'
    ];
    return view('home.layouts.wrapper',$data );
});
// Blog
Route::get('/blog', function () {
    $data = [
        'content' => 'home/blog/index'
    ];
    return view('home.layouts.wrapper',$data );
});
// Contact
Route::get('/contact', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper',$data );
});
