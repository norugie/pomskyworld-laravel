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


Route::middleware(['auth'])->group(function() {
    // Dashboard
    Route::get('/cms/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

    /* -- Parents -- */
    Route::prefix('cms/parents')->group(function () {
        // Parents - list
        Route::get('/', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyList']);
        //Parents - fetch individual entry
        Route::get('/create', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyCreateForm']);
        Route::get('/{id}', [App\Http\Controllers\FamilyController::class, 'showPuppyFamily']);
        Route::get('/{id}/update/{type}', [App\Http\Controllers\FamilyController::class, 'showPuppyFamilyUpdateForm']);
        // Parents - submit data
        Route::post('/create', [App\Http\Controllers\FamilyController::class, 'createPuppyFamily']);
        Route::post('/{id}/update/{type}', [App\Http\Controllers\FamilyController::class, 'updatePuppyFamily']);
        Route::post('/deactivate', [App\Http\Controllers\FamilyController::class, 'deactivatePuppyFamily']);
    });

    /* -- Puppies -- */
    Route::prefix('cms/puppies')->group(function () {
        // Puppies - list
        Route::get('/', [App\Http\Controllers\PuppyController::class, 'showPuppyList']);
        // Puppies - fetch individual entry
        Route::get('/create', [App\Http\Controllers\PuppyController::class, 'showPuppyCreateForm']);
        // Puppies - submit data
        Route::post('/create', [App\Http\Controllers\PuppyController::class, 'createPuppy']);
    });

    /* -- Testimonials -- */
    Route::prefix('cms/testimonials')->group(function () {
        // Testimonials - list
        Route::get('/', [App\Http\Controllers\TestimonialController::class, 'showTestimonialList']);
        // Testimonials - fetch individual entry
        Route::get('/create', [App\Http\Controllers\TestimonialController::class, 'showTestimonialCreateForm']);
        // Testimonials - submit data
        Route::post('/create', [App\Http\Controllers\TestimonialController::class, 'createTestimonial']);
        Route::post('/deactivate', [App\Http\Controllers\TestimonialController::class, 'deactivateTestimonial']);
    });

    // Miscellaneous Routes
    Route::post('/cms/upload/{type}', [App\Http\Controllers\HomeController::class, 'uploadImage']);
    Route::post('/cms/delete/{type}', [App\Http\Controllers\HomeController::class, 'deleteImage']);
});

