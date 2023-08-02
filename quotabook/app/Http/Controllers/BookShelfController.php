<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookShelf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class BookShelfController extends Controller
{
    public function getBookShelf() {
        $bookshelves = Bookshelf::all();
        $this->updateBooksCount();
        return view('bookshelf.bookshelf')
        ->with('bookshelves', $bookshelves);
    }

    public function updateBooksCount(){
        $bookshelves = BookShelf::all();
        foreach($bookshelves as $bookshelf){
            $bookshelf->books_count = DB::table('Books')->where('bookshelves_id','=',$bookshelf->id)->count();
            $bookshelf->save();
        }
    }

    public function getBookShelfDetail($id) {
        $bookshelves = BookShelf::find($id);
        return view('bookshelf.bookshelf_detail')
        ->with('bookshelves', $bookshelves);
    }

    public function getBookShelfCreate() {
        $bookshelves = BookShelf::all();

        return view('bookshelf.bookshelf_create')
        ->with('bookshelves', $bookshelves);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postBookshelfValidation(Request $request) {
        $validation = $request->validateWithBag('post', [
            'bookshelf_name' => 'required|unique:post|max:24',
            'floor' => ['required'],
            'book_id' => ['unre'],
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    public function getQuoteDelete($id) {

    }

    public function submitChoices(Request $request)
{
    $selectedBookIds = $request->input('book_choices', []);
    
    // Use the selectedBookIds to retrieve the selected books from the database
    $selectedBooks = Book::whereIn('id', $selectedBookIds)->get();
    
    // Process the selected books as needed
}
}
