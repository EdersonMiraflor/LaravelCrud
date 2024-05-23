<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Define a custom route for a welcome action in the ProductController
//Route::get('/welcome', 'ProductController@welcome');

// Define RESTful routes for the 'products' resource using Route::resource
Route::resource('products', ProductController::class);