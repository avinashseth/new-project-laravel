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

Route::redirect('/facebook', 'https://facebook.com/zuck');

// Route::get('about', function() {

//     return view('about');

// });

Route::view('about', 'about');

Route::get('check-age/{age}', function($age) {

    echo 'Your age is: ' . $age;

});

Route::get('page/{page_number?}', function($page_number = null) {

    if(is_null($page_number)) {
        echo 'You have not passed a page here';
    } else {
        echo 'You have passed:' . $page_number;
    }

});

Route::get('result/{rollnumber}', function ($rollnumber) {

    echo $rollnumber;

})->where('rollnumber', '[0-9]+');

Route::view('welcome', 'welcome');

Route::post('check-you-vote/{roll_number}', function($roll_number) {

    if($_POST['age'] >= 18) {
        echo 'You can vote';
    } else {
        echo 'You cannot vote';
    }

})->where('roll_number', '[0-9]+')->name('verify-age');

Route::prefix('something-else')->group(function() {

    Route::get('login', function() {

        echo 'This is a login page';

    })->name('get-accounts-login-page');

    Route::get('register', function() {

        echo 'This is a register page';

    });

});

Route::fallback(function() {

    echo 'Page Not Found';

});