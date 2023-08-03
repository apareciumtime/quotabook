<?php

namespace App\Http\Controllers;

use App\Models\BookShelf;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class BookShelfController extends Controller
{
    public function getBookShelf() {
        $bookshelves = Bookshelf::all();

        return view('bookshelf.bookshelf')
        ->with('bookshelves', $bookshelves);
    }

    public function getBookShelfDetail($id) {

    }

    public function getBookShelfCreate() {
        $books = Book::all();

        return view('bookshelf.bookshelf_create')
        ->with('books', $books);
    }
    public function postBookShelfCreate(Request $request) {
        $validation = $request->validateWithBag('post', [
            'bookshelf_name' => ['required'],
        ]);

        $bookshelf = new BookShelf();
        $bookshelf->bookshelf_name = $request->bookshelf_name;

        $bookCount = 0;
        $f3books = $request->input('f3books');
        $f2books = $request->input('f2books');
        $f1books = $request->input('f1books');

        $bookOrder = 1;
        foreach ($f3books as $bookTitle) {
            if(!empty($bookTitle)) {
                $book = Book::where('title', $bookTitle)->first();
                if (empty($book)) {
                    $book = new Book;
                    $book->title = $bookTitle;
                }
                $book->bookshelf_id = $bookshelf->id;
                $book->floor = 3;
                $book->order = $bookOrder;
                $bookOrder++;
                $book->save();
                $bookCount++;
            }
        }

        $bookOrder = 1;
        foreach ($f2books as $bookTitle) {
            if(!empty($bookTitle)) {
                $book = Book::where('title', $bookTitle)->first();
                if (empty($book)) {
                    $book = new Book;
                    $book->title = $bookTitle;
                }
                $book->bookshelf_id = $bookshelf->id;
                $book->floor = 2;
                $book->order = $bookOrder;
                $bookOrder++;
                $book->save();
                $bookCount++;
            }
        }

        $bookOrder = 1;
        foreach ($f1books as $bookTitle) {
            if(!empty($bookTitle)) {
                $book = Book::where('title', $bookTitle)->first();
                if (empty($book)) {
                    $book = new Book;
                    $book->title = $bookTitle;
                }
                $book->bookshelf_id = $bookshelf->id;
                $book->floor = 1;
                $book->order = $bookOrder;
                $bookOrder++;
                $book->save();
                $bookCount++;
            }
        }

        $bookshelf->book_amount = $bookCount;
        $bookshelf->save();

        return redirect()->route('book_shelf');
    }
    public function getBookShelfUpdate($id) {
        $bookshelf = Bookshelf::find($id);
        $books = Book::all();
        $f1books = [];
        $f2books = [];
        $f3books = [];
        $available_books = [];

        function sortByOrder($book1, $book2) {
            return strcmp($book1->order, $book2->order);
        }

        foreach ($books as $book) {
            if ($book->bookshelf_id == $bookshelf->id) {
                if ($book->floor == 1) {
                    array_push($f1books, $book);
                } elseif ($book->floor == 2) {
                    array_push($f2books, $book);
                } elseif ($book->floor == 3) {
                    array_push($f3books, $book);
                }
            } elseif (empty($book->bookshelf_id)) {
                array_push($available_books, $book);
            }
        }

        usort($f1books, 'sortByOrder');
        usort($f2books, 'sortByOrder');
        usort($f3books, 'sortByOrder');

        return view('bookshelf.bookshelf_update')
        ->with('bookshelf', $bookshelf)
        ->with('books', $books);
    }

    public function postBookShelfUpdate(Request $request, $id) {

    }

    public function getQuoteDelete($id) {

    }
}
