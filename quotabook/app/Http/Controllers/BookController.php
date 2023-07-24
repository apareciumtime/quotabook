<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBook() {
        $books = Book::all();
        return view('book.book')->with('books', $books);
    }

    public function getBookDetail($id) {
        $book = Book::find($id);
        return view('book.book_detail')
        ->with('book', $book);
    }

    public function getBookCreate() {
        return view('book.book_create');
    }
    public function postBookCreate(Request $request) {
        $validation = $request->validateWithBag('post', [
            'title' => ['required'],
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;
        $book->edition = $request->edition;
        $book->ISBN = $request->ISBN;
        $book->ori_lan = $request->ori_lan;
        $book->author = $request->author;
        $book->trans_lan = $request->trans_lan;
        $book->translator = $request->translator;
        $book->artist = $request->artist;
        $book->details = $request->details;
        // $book->user_id = Auth::id();
        $book->save();

        return redirect()->route('book');
    }
    public function getBookUpdate($id) {
        $book = Book::find($id);
        return view('book.book_update')
        ->with('book', $book);
    }

    public function postBookUpdate(Request $request, $id) {
        $validation = $request->validateWithBag('post', [
            'title' => ['required'],
        ]);

        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;
        $book->edition = $request->edition;
        $book->ISBN = $request->ISBN;
        $book->ori_lan = $request->ori_lan;
        $book->author = $request->author;
        $book->trans_lan = $request->trans_lan;
        $book->translator = $request->translator;
        $book->artist = $request->artist;
        $book->details = $request->details;
        // $quote->user_id = Auth::id();

        $book->save();

        return redirect()->route('book_detail', $book->id);
    }


    public function getBookDelete($id) {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('book');
    }
}
