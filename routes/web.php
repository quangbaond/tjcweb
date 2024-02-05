<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('tjc.home')->middleware('localization');
// change language
Route::get('/language/{language}', [\App\Http\Controllers\LanguageController::class, 'LanguageSwitch'])->name('tjc.language');
Route::get('/jewelry/{category}', [\App\Http\Controllers\ProductController::class, 'category'])->name('tjc.jewelry');
Route::get('/jewelry/{category}/{subCategory}', [\App\Http\Controllers\ProductController::class, 'subCategory'])->name('tjc.jewelry.subCategory');
//Route::get('/jewelry/{category}/{subCategory}/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('tjc.product.show');
Route::get('/promotion', [\App\Http\Controllers\PromotionController::class, 'index'])->name('tjc.promotion');

