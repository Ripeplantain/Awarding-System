<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SpecialController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// This route add user to the database
Route::get('/user', [UserController::class, 'create'])->name('register');
Route::post('/user', [UserController::class, 'store'])->name('register');

// This route is for controlling the award by creating editing and deleting
Route::resource('award',AwardController::class);
Route::resource('special',SpecialController::class);


// This route is for filtering the table
Route::get('/show/{award:session}',[HomeController::class,'filter']);

// This route is for pdf view
Route::get('/pdf', [PdfController::class, 'index'])->name('preview');
Route::get('/download',[PdfController::class,'create'])->name('print');
Route::get('/document',[PdfController::class,'preview'])->name('special_award');
Route::get('/print',[PdfController::class,'download'])->name('download');