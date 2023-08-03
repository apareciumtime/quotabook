<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CommonBook;
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
    public function postCommonBookCreate(Request $request) {
        $validation = $request->validateWithBag('post', [
            'title' => ['required'],
        ]);

        $common_book = new CommonBook();
        $common_book->publisher = $request->publisher;
        $common_book->edition = $request->edition;
        $common_book->isbn = $request->isbn;
        $common_book->ori_lan = $request->ori_lan;
        $common_book->author = $request->author;
        $common_book->trans_lan = $request->trans_lan;
        $common_book->translator = $request->translator;
        $common_book->artist = $request->artist;
        // $book->user_id = Auth::id();
        $common_book->save();

        $book = new Book();
        $book->title = $request->title;
        $book->pages = $request->pages;
        $book->common_books_id = $common_book->id;
        $book->save();

        return redirect()->route('book');
    }
    public function getBookUpdate($id) {
        $book = Book::find($id);
        $common_book = CommonBook::find($book->common_books_id);
        return view('book.book_update')
        ->with('book', $book)
        ->with('book_detail', $common_book);
    }

    public function postBookUpdate(Request $request, $id) {
        $validation = $request->validateWithBag('post', [
            'title' => ['required'],
        ]);

        $book = Book::findOrFail($id);
        $common_book = CommonBook::findOrFail($book->common_books_id);
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
