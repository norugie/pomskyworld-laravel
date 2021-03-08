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

// Testing
Route::get('/test', function(){
    return view('test');
});

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
Route::get('/cms/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

/* -- Parents -- */
// Parents - list
Route::get('/cms/parents', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyList'])->middleware('auth');
//Parents - fetch individual entry
Route::get('/cms/parents/create', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyCreateForm'])->middleware('auth');
Route::get('/cms/parents/{id}', [App\Http\Controllers\FamilyController::class, 'showPuppyFamily'])->middleware('auth');
Route::get('/cms/parents/{id}/update/{type}', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyUpdateForm'])->middleware('auth');
// Parents - submit data
Route::post('/cms/parents/create', [App\Http\Controllers\FamilyController::class, 'createPuppyFamily'])->middleware('auth');
Route::post('/cms/parents/{id}/update/{type}', [App\Http\Controllers\FamilyController::class, 'updatePuppyFamily'])->middleware('auth');
Route::post('/cms/parents/deactivate', [App\Http\Controllers\FamilyController::class, 'deactivatePuppyFamily'])->middleware('auth');

/* -- Puppies -- */
// Puppies - list
Route::get('/cms/puppies', [App\Http\Controllers\PuppyController::class, 'showPuppyList'])->middleware('auth');
// Puppies - fetch individual entry
Route::get('/cms/puppies/create', [App\Http\Controllers\PuppyController::class, 'showPuppyCreateForm'])->middleware('auth');
// Puppies - submit data
Route::post('/cms/puppies/create', [App\Http\Controllers\PuppyController::class, 'createPuppy'])->middleware('auth');

/* -- Testimonials -- */
// Testimonials - list
Route::get('/cms/testimonials', [App\Http\Controllers\TestimonialController::class, 'showTestimonialList'])->middleware('auth');
// Testimonials - fetch individual entry
Route::get('/cms/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'showTestimonialCreateForm'])->middleware('auth');
// Testimonials - submit data
Route::post('/cms/testimonials/create', [App\Http\Controllers\TestimonialController::class, 'createTestimonial'])->middleware('auth');

// Miscellaneous Routes
Route::post( '/cms/upload/{type}', [App\Http\Controllers\HomeController::class, 'uploadImage'] )->name('home');
Route::post( '/cms/delete/{type}', [App\Http\Controllers\HomeController::class, 'deleteImage'] )->name('home');
