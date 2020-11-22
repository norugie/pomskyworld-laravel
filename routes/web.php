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

// Home page
Route::get( '/', function () {
    return view( 'index' );
});

Route::get( '/pomsky', function () {
    return view( 'pomsky' );
});

// Site content here

// CMS content here
Auth::routes();

Route::get('/cms/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cms/parents', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyList'])->middleware('auth');
Route::get('/cms/puppies', [App\Http\Controllers\PuppyController::class, 'showPuppyList'])->middleware('auth');
Route::get('/cms/testimonials', [App\Http\Controllers\TestimonialController::class, 'showTestimonialList'])->middleware('auth');
