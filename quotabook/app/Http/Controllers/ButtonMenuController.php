<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonMenuController extends Controller
{
    public function getQuote()
    {
        return view('quote.quote');
    }
    public function getBookShelf()
    {
        return view('bookshelf.bookshelf');
    }
}
