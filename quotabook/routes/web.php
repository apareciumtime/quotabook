<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ButtonMenuController;
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

/*login*/
// Route::get('/auth/{provider}/redirect', [ProviderController::class,'redirect']);
// Route::get('/auth/{provider}/callback', [ProviderController::class,'callback']);

// Route::get('auth/google/', [ProviderController::class,'redirect']);
// Route::get('auth/google/callback', [ProviderController::class,'callback']);

Route::get('auth/google', [ProviderController::class,'googleRedirect']);
Route::get('auth/google/callback', [ProviderController::class,'loginWithGoogle']);

Route::get('logout',[ProviderController::class,'logoutWithGoogle']);

 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
 
    // $user->token
});


Route::get('/', function () {
    return view('homepage.home');
});

Route::get('quote', [ButtonMenuController::class,'getQuote'])->name('quote');
Route::get('book_shelf', [ButtonMenuController::class, 'getBookShelf'])->name('book_shelf');
Route::get('writing', [ButtonMenuController::class, 'getWriting'])->name('writing');
Route::get('manage_library', [ButtonMenuController::class, 'getManageLibrary'])->name('manage_library');


 