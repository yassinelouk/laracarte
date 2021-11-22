<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;


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


 Route::view('/', 'laracarte.home')->name('home');
 Route::view('/about', 'laracarte.about')->name('about');
 Route::get('/contact','MessageController@create')->name('contact.create');
  Route::post('/contact','MessageController@store')->name('contact.store');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
