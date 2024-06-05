<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SoftwareController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SearchController::class,'index'])->name('index');

Route::post('/search', [SoftwareController::class, 'search'])->name('search-software');