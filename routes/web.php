<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//All listings
Route::get('/listings', function() {
    return view('listings', [
        'heading' => "Latest Listings",
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});


#Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
