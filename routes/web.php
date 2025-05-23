<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [ProductController::class, 'homepage']);

Route::get('/productoverview/{id}', [ProductController::class, 'productOverview'])->name('product.overview');
