<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BookShelfController;
use App\Http\Controllers\WritingController;
use App\Http\Controllers\ManageLibraryController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Google Routes
Route::get('auth/google', [ProviderController::class,'googleRedirect']);
Route::get('auth/google/callback', [ProviderController::class,'loginWithGoogle']);

Route::get('logout',[ProviderController::class,'logoutWithGoogle']);


// Home
Route::get('/', function () {
    return view('homepage.home');
})->name('home');

// Quote Routes
Route::get('quote', [QuoteController::class,'getQuote'])->name('quote');
Route::get('quote/{id}', [QuoteController::class,'getQuoteDetail'])->name('quote_detail');
Route::get('quote/create', [QuoteController::class,'getQuoteCreate'])->name('quote_create');
Route::post('quote/create/post', [QuoteController::class,'postQuoteCreate'])->name('quote_create_post');
// Route::get('quote/{id}/update', [QuoteController::class,'getQuoteUpdate'])->name('quote_detail');


// BookShelf Routes
Route::get('book_shelf', [BookShelfController::class, 'getBookShelf'])->name('book_shelf');


// Writing Routes
Route::get('writing', [WritingController::class, 'getWriting'])->name('writing');


// ManageLibrary Routes
Route::get('manage_library', [ManageLibraryController::class, 'getManageLibrary'])->name('manage_library');


