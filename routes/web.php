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

// Site content here
Route::get( '/', function () {
    return view( 'index' );
});

Route::get( '/pomsky', function () {
    return view( 'pomsky' );
});

Route::get( '/photos', function () {
    return view( 'photos' );
});

Route::get( '/available-puppies', function () {
    return view( 'available' );
});

Route::get( '/previous-puppies', function () {
    return view( 'previous' );
});

Route::get( '/testimonials', function () {
    return view( 'testimonials' );
});

Route::get( '/parents', function () {
    return view( 'parents' );
});

Route::get( '/guarantee', function () {
    return view( 'guarantee' );
});

Route::get( '/prices', function () {
    return view( 'prices' );
});

Route::get( '/qualifications', function () {
    return view( 'qualifications' );
});

Route::get( '/about', function () {
    return view( 'about' );
});

Route::get( '/faq', function () {
    return view( 'faq' );
});

Route::get( '/contact', function () {
    return view( 'contact' );
});

// CMS content here
Auth::routes();

// Dashboard
Route::get('/cms/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Parents
Route::get('/cms/parents', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyList'])->middleware('auth');
Route::get('/cms/parents/create', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyCreateForm'])->middleware('auth');
Route::post('/cms/parents/create', [App\Http\Controllers\FamilyController::class, 'createPuppyFamily'])->middleware('auth');

// Puppies
Route::get('/cms/puppies', [App\Http\Controllers\PuppyController::class, 'showPuppyList'])->middleware('auth');
Route::get('/cms/puppies/create', [App\Http\Controllers\PuppyController::class, 'showPuppyCreateForm'])->middleware('auth');
Route::post('/cms/puppies/create', [App\Http\Controllers\PuppyController::class, 'createPuppy'])->middleware('auth');

// Testimonials
Route::get('/cms/testimonials', [App\Http\Controllers\TestimonialController::class, 'showTestimonialList'])->middleware('auth');
Route::get('/cms/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'showTestimonialCreateForm'])->middleware('auth');
Route::post('/cms/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'createTestimonial'])->middleware('auth');

// Miscellaneous Routes
Route::post( '/cms/upload/{type}', [App\Http\Controllers\HomeController::class, 'uploadImage'] )->name('home');
Route::post( '/cms/delete/{type}', [App\Http\Controllers\HomeController::class, 'deleteImage'] )->name('home');
