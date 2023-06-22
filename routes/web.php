<?php

use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssessorController;
use App\Http\Controllers\DocumentController;
use App\Http\Middleware\Assessor;
use App\Models\transaction_info;

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

// Common Resource Routes:
// index - shows all data
// show - shows a single data
// create - show form to create data
// store - store new data
// edit - show form to edit data
// update - update data
// destroy - delete data

Route::middleware(['guest'])->group(function () {
    //Show register form
    Route::get('/user_register', [UserController::class, 'register']);

    //Store Registered account
    Route::post('/user_registered', [UserController::class, 'user_registered']);

    //Show Login form
    Route::get('/login', [UserController::class, 'login'])->name('login');

    //Login users
    Route::post('/user_login', [UserController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {

    //Logout user
    Route::post('/logout', [UserController::class, 'logout']);

    //Show status page
    Route::get('/status', [DocumentController::class, 'status']);

    //Show submission form
    Route::get('/submission', [DocumentController::class, 'submission']);

    //Submit to next page
    Route::post('/submit', [DocumentController::class, 'submit']);

    Route::get('/submit_form', [DocumentController::class, 'submit_form'])->name('submit_form');

    //Store Document submitted
    Route::post('/submitted', [DocumentController::class, 'submitted']);

    Route::get('/user_documents/{transac_id}', [
        DocumentController::class, 'user_show_file'
    ]);

    Route::get('/create', function () {
        return view('admin.create_transaction');
    });
    
    Route::post('/new', [AdminController::class, 'new']);
    
    Route::get('/create_new', [AdminController::class, 'create_new'])->name('create_new');
    
    Route::post('/save_new', [AdminController::class, 'save']);
    
    Route::post('/transaction/{{name}}', function () {
        return view('assessor.create_transaction2');
    });
});

Route::middleware(['assessor'])->group(function () {
    Route::get('/assessor', [AssessorController::class, 'index']);

    Route::get('/documents/{id}', [
        DocumentController::class, 'show'
    ]);

    Route::get('files/{transac_name}/{id}',[
        DocumentController::class, 'show_files'
    ]);

    Route::get('/assessor/user_assessr/{{id}}', [AssessorController::class, 'index']);

    Route::put('/assessment', [AssessorController::class, 'assessment']);
});




Route::get('/transactions', function(){
    $info = transaction_info::all();
    return view('user.transactions')->with('transactions', $info);
});

Route::get('/', function(){
    $info = transaction_info::all();
    return view('user.transactions')->with('transactions', $info);
});