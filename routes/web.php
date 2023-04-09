<?php

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

Route::get('/', function (){
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => \App\Models\Listing::all()
    ]);
});

//Single listing
Route::get('/listings/{listing}', function (Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});
