<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Account\AccountsController;
use App\Http\Controllers\Student\StudentController;

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

Route::prefix('account')->group(function() {

    Route::get('login', [AccountsController::class, 'getLoginPage'])->name('get-accounts-login-page');

    Route::get('register', [AccountsController::class, 'getRegisterPage'])->name('get-accounts-register-page');

});

Route::prefix('student')->group(function() {

    Route::get('view-all-students', [StudentController::class, 'getListOfAllStudents'])->name('get-list-of-all-students');

});