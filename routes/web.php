<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

//Route::get('/hello/{id}', function ($id){
//    ddd($id);
//    return response("Post ". $id);
//})-> where('id', '[0-9]+');

Route::get('/', [ListingController::class, 'index']);


Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Edit show form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit'])->middleware('auth');

//Updating edited form
Route::put('listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete  form
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users',[UserController::class, 'store']);

//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


//Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login new user
Route::post('/users/authenticate',[UserController::class, 'authenticate']);
