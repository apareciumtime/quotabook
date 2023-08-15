<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookShelf;
use App\Models\CommonBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class BookShelfController extends Controller
{
    public function getBookShelf() {
        $bookshelves = Bookshelf::all();

        return view('bookshelf.bookshelf')
        ->with('bookshelves', $bookshelves);
    }

    public function sortByOrder($book1, $book2) {
        return strcmp($book1->order, $book2->order);
    }

    public function getBookShelfDetail($id) {
        $bookshelf = BookShelf::findOrFail($id);
        $books = Book::all();
        $f1books = [];
        $f2books = [];
        $f3books = [];
        $available_books = [];

        foreach ($books as $book) {
            if ($book->bookshelves_id == $bookshelf->id) {
                if ($book->floor == 1) {
                    array_push($f1books, $book);
                } elseif ($book->floor == 2) {
                    array_push($f2books, $book);
                } elseif ($book->floor == 3) {
                    array_push($f3books, $book);
                }
            } elseif (empty($book->bookshelves_id)) {
                array_push($available_books, $book);
            }
        }

        usort($f1books, [$this, 'sortByOrder']);
        usort($f2books, [$this, 'sortByOrder']);
        usort($f3books, [$this, 'sortByOrder']);

        return view('bookshelf.bookshelf_detail')
        ->with('bookshelf', $bookshelf)
        ->with('f1books', $f1books)
        ->with('f2books', $f2books)
        ->with('f3books', $f3books);
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
        $bookshelf->name = $request->bookshelf_name;

        DB::beginTransaction();

        try {
            $bookshelf->save();
            $bookCount = 0;

            $floors = ['f3books', 'f2books', 'f1books'];

            foreach ($floors as $floorName) {
                $floorBooks = $request->input($floorName);
                $bookOrder = 1;

                foreach ($floorBooks as $bookTitle) {
                    if (!empty($bookTitle)) {
                        $book = Book::where('title', $bookTitle)->first();

                        if (empty($book)) {
                            $common_book = new CommonBook;
                            $common_book->save();

                            $book = new Book();
                            $book->title = $bookTitle;
                            $book->common_books_id = $common_book->id;
                        }

                        $book->bookshelves_id = $bookshelf->id;
                        $book->floor = 3 - array_search($floorName, $floors);
                        $book->order = $bookOrder++;
                        $book->save();
                        $bookCount++;
                    }
                }
            }

            $bookshelf->books_count = $bookCount;
            $bookshelf->save();

            DB::commit();

            return redirect()->route('book_shelf');
        } catch (\Exception $e) {
            // Rollback the transaction on exception
            DB::rollback();

            // Handle the exception as needed
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred']);
        }
    }
    public function getBookShelfUpdate($id) {
        $bookshelf = Bookshelf::find($id);
        $books = Book::all();
        $f1books = [];
        $f2books = [];
        $f3books = [];
        $available_books = [];

        foreach ($books as $book) {
            if ($book->bookshelves_id == $bookshelf->id) {
                if ($book->floor == 1) {
                    array_push($f1books, $book);
                } elseif ($book->floor == 2) {
                    array_push($f2books, $book);
                } elseif ($book->floor == 3) {
                    array_push($f3books, $book);
                }
            } elseif (empty($book->bookshelves_id)) {
                array_push($available_books, $book);
            }
        }

        usort($f1books, [$this, 'sortByOrder']);
        usort($f2books, [$this, 'sortByOrder']);
        usort($f3books, [$this, 'sortByOrder']);

        return view('bookshelf.bookshelf_update')
        ->with('bookshelf', $bookshelf)
        ->with('books', $available_books)
        ->with('f1books', $f1books)
        ->with('f2books', $f2books)
        ->with('f3books', $f3books);
    }

    public function postBookShelfUpdate(Request $request, $id) {
        $validation = $request->validateWithBag('post', [
            'bookshelf_name' => ['required'],
        ]);

        $bookshelf = BookShelf::find($id);

        DB::beginTransaction();

        try {
            $bookshelf->name = $request->bookshelf_name;
            $bookCount = 0;

            $floors = ['f3books', 'f2books', 'f1books'];

            foreach ($floors as $floorName) {
                $floorBooks = $request->input($floorName);
                $bookOrder = 1;

                foreach ($floorBooks as $bookTitle) {
                    if (!empty($bookTitle)) {
                        $book = Book::where('title', $bookTitle)->first();

                        if (empty($book)) {
                            $common_book = new CommonBook;
                            $common_book->save();

                            $book = new Book();
                            $book->title = $bookTitle;
                            $book->common_books_id = $common_book->id;
                        }

                        $book->bookshelves_id = $bookshelf->id;
                        $book->floor = 3 - array_search($floorName, $floors);
                        $book->order = $bookOrder++;
                        $book->save();
                        $bookCount++;
                    }
                }
            }

            $bookshelf->books_count = $bookCount;
            $bookshelf->save();

            DB::commit();

            return redirect()->route('book_shelf_detail', $bookshelf->id);
        } catch (\Exception $e) {
            // Rollback the transaction on exception
            DB::rollback();

            // Handle the exception as needed
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred']);
        }
    }

    public function getBookShelfDelete($id) {
        $bookshelf = BookShelf::findOrFail($id);
        $books = Book::all();

        foreach ($books as $book) {
            if ($book->bookshelves_id == $bookshelf->id) {
                $book->bookshelves_id = null;
                $book->floor = null;
                $book->order = null;
                $book->save();
            }
        }

        $bookshelf->delete();

        return redirect()->route('book_shelf');
    }
}
