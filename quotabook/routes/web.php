<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BookController;
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


// Book Routes
Route::get('book', [BookController::class,'getBook'])->name('book');
    // Create
Route::get('book/create', [BookController::class,'getBookCreate'])->name('book_create');
Route::post('book/create/post', [BookController::class,'postCommonBookCreate'])->name('book_create_post');
    // Update
Route::get('book/update/{id}', [BookController::class,'getBookUpdate'])->name('book_update');
Route::post('book/update/post/{id}', [BookController::class,'postBookUpdate'])->name('book_update_post');
    // Delete, Detail
Route::get('book/delete/{id}', [BookController::class,'getBookDelete'])->name('book_delete');
Route::get('book/{id}', [BookController::class,'getBookDetail'])->name('book_detail');


// BookShelf Routes
Route::get('/book_shelf', [BookShelfController::class, 'getBookShelf'])->name('book_shelf');
    //Create
Route::get('/book_shelf/create', [BookShelfController::class, 'getBookShelfCreate'])->name('book_shelf_create');
Route::post('/book_shelf/create/post', [BookshelfController::class,'postBookshelfCreate'])->name('book_shelf_create_post');
Route::post('/submit_choices', [BookShelfController::class, 'submitChoices'])->name('submit_choices');
    //Update
Route::get('book_shelf/update/{id}', [BookShelfController::class,'getBookShelfUpdate'])->name('book_shelf_update');
Route::post('book_shelf/update/post/{id}', [BookShelfController::class,'postBookShelfUpdate'])->name('book_shelf_update_post');
    //Delete
Route::get('/book_shelf/delete/{id}', [BookShelfController::class, 'getBookShelfDelete'])->name('book_shelf_delete');
    //Detail
Route::get('/book_shelf/{id}', [BookShelfController::class, 'getBookShelfDetail'])->name('book_shelf_detail');


// Writing Routes
Route::get('writing', [WritingController::class, 'getWriting'])->name('writing');


// ManageLibrary Routes
Route::get('manage_library', [ManageLibraryController::class, 'getManageLibrary'])->name('manage_library');


