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
    return view('welcome');
});

Route::get('/live', function () {
    return view('live');
})->name('live');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(["middleware" => 
	'auth:sanctum', 
	'verified'
], function(){

	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');

	Route::get('/salats',function(){
		return view('admin.salats');
	})->name('salats');

	Route::get('/hadiths',function(){
		return view('admin.hadiths');
	})->name('hadiths');

	Route::get('/gallery',function(){
		return view('admin.gallery');
	})->name('gallery');

	Route::get('/contact-info',function(){
		return view('admin.contact');
	})->name('contact');

});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
