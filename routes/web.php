<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;


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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {

    // Admin

    Route::middleware(['can:isAdmin'])->group(function () {

        // Routes for admin role
        Route::get('/kokpit' , [AdminController::class , 'kokpit'] )->name('admin.kokpit');
    });

    // Logged in user 

    Route::middleware(['can:isUser'])->group(function () {

        // Routes for logged in user 
        Route::get('/my-account' , [UserController::class , 'account'] )->name('user.account');
    });

    
});
