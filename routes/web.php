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
    echo 'Hello World!';
});

Route::get('welcome/{name}', function($name) {

    echo 'Hi, ' . $name;

});


Route::get('verify-vote/{age}', function($age) {

    return view('home', compact('age'));

});

Route::get('check', function() {

    $name = "<script>alert('hacked');</script>";

    return view('welcome', compact('name'));

});

Route::get('more-about-blade', function() {

    return view('about');

});

Route::get('list-avengers', function() {

    $avengers = ['Cap','Spider Man','Iron Man','Hulk','Black Panther','Hawk eye','Black widow'];

    return view('list-avengers', compact('avengers'));

});