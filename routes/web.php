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
// webhook messenger
Route::get('/webhook', [\App\Http\Controllers\WebhookController::class, 'verify'])->name('tjc.webhook');

//callback login facebook
Route::get('/callback', [\App\Http\Controllers\WebhookController::class, 'verify'])->name('tjc.callback');
