<?php

use App\Http\Controllers\ButtonMenuController;
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

Route::get('/', function () {
    return view('homepage.home');
});

Route::get('quote', [ButtonMenuController::class,'getQuote'])->name('quote');
Route::get('book_shelf', [ButtonMenuController::class, 'getBookShelf'])->name('book_shelf');
Route::get('writing', [ButtonMenuController::class, 'getWriting'])->name('writing');
Route::get('manage_library', [ButtonMenuController::class, 'getManageLibrary'])->name('manage_library');