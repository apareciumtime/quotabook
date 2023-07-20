<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BookShelfController;
use App\Http\Controllers\WritingController;
use App\Http\Controllers\ManageLibraryController;
use App\Models\Bookshelf;
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
    // Create
Route::get('quote/create', [QuoteController::class,'getQuoteCreate'])->name('quote_create');
Route::post('quote/create/post', [QuoteController::class,'postQuoteCreate'])->name('quote_create_post');
    // Update
Route::get('quote/update/{id}', [QuoteController::class,'getQuoteUpdate'])->name('quote_update');
Route::post('quote/update/post/{id}', [QuoteController::class,'postQuoteUpdate'])->name('quote_update_post');
    // Delete, Detail
Route::get('quote/delete/{id}', [QuoteController::class,'getQuoteDelete'])->name('quote_delete');
Route::get('quote/{id}', [QuoteController::class,'getQuoteDetail'])->name('quote_detail');


// BookShelf Routes
Route::get('/book_shelf', [BookShelfController::class, 'index'])->name('book_shelf');
    //Create
Route::get('/book_shelf/create', [BookShelfController::class, 'create'])->name('book_shelf_create');
Route::post('/book_shelf/create/post', [BookshelfController::class,'postBookshelfCreate'])->name('book_shelf_create_post');
    //Update
Route::get('/book_shelf/update', [BookShelfController::class, 'update'])->name('book_shelf_update');
    //Delete
Route::get('/book_shelf/delete', [BookShelfController::class, 'destroy'])->name('book_shelf_delete');
    //Detail
Route::get('/book_shelf/{id}', [BookShelfController::class, 'show'])->name('book_shelf_detail');


// Writing Routes
Route::get('writing', [WritingController::class, 'getWriting'])->name('writing');


// ManageLibrary Routes
Route::get('manage_library', [ManageLibraryController::class, 'getManageLibrary'])->name('manage_library');


