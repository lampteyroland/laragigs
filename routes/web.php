<?php

use Illuminate\Http\Request;
use App\Models\Listing;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/tested/{id}',function($id){
//    return response('Post' . $id);
//    }) -> where('id','[0-8]+');
//


//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => Listing::all()
    ]);

});

//Single Listing
Route::get('/listings/{id}', function ($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});



