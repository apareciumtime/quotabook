<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookShelfController extends Controller
{
    public function getBookShelf() {
        return view('bookshelf.bookshelf');
    }
}
