<?php

namespace App\Http\Controllers;
use App\Models\CommonBook;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\Book;

class QuoteController extends Controller
{
    public function getQuote() {
        $quotes = Quote::all();
        return view('quote.quote')->with('quotes', $quotes);
    }

    public function getQuoteDetail($id) {
        $quote = Quote::find($id);
        $book = Book::where('id', $quote->books_id)->first();
        $book_detail = CommonBook::where('id', $book->id)->first();
        return view('quote.quote_detail')
        ->with('quote', $quote)
        ->with('book', $book)
        ->with('book_detail', $book_detail);
    }

    public function getQuoteCreate() {
        $books = Book::all();
        return view('quote.quote_create')->with('books', $books);
    }
    public function postQuoteCreate(Request $request) {
        $validation = $request->validateWithBag('post', [
            'quote' => ['required'],
            'book' => ['required'],
        ]);

        $quote = new Quote();
        $quote->quote = $request->quote;

        $bookTitle = $request->book;
        $book = Book::where('title', $bookTitle)->first();
        if (!$book) {
            $book = new Book();
            $common_book = new CommonBook;
            $common_book->save();
            $book->title = $bookTitle;
            $book->common_books_id = $common_book->id;
            $book->save();
        }
        $quote->books_id = $book->id;

        // $quote->user_id = Auth::id();
        if ($request->has('chapter')) {
            $quote->chapter = $request->chapter;
        }
        if ($request->has('page')) {
            $quote->page_at = $request->page_at;
        }
        if ($request->has('comment')) {
            $quote->comment = $request->comment;
        }

        $quote->save();

        return redirect()->route('quote');
    }
    public function getQuoteUpdate($id) {
        $quote = Quote::find($id);
        $book = Book::where('id', $quote->book_id)->first();
        $books = Book::all();
        return view('quote.quote_update')
        ->with('quote', $quote)
        ->with('book_quote', $book)
        ->with('books', $books);
    }

    public function postQuoteUpdate(Request $request, $id) {
        $validation = $request->validateWithBag('post', [
            'quote' => ['required'],
            'book' => ['required'],
        ]);

        $quote = Quote::findOrFail($id);
        $quote->quote = $request->quote;

        $bookTitle = $request->book;
        $book = Book::where('title', $bookTitle)->first();
        if (!$book) {
            $book = new Book();
            $common_book = new CommonBook;
            $common_book->save();
            $book->title = $bookTitle;
            $book->common_books_id = $common_book->id;
            $book->save();
        }
        $quote->books_id = $book->id;

        // $quote->user_id = Auth::id();
        if ($request->has('chapter')) {
            $quote->chapter = $request->chapter;
        }
        if ($request->has('page')) {
            $quote->page_at = $request->page_at;
        }
        if ($request->has('comment')) {
            $quote->comment = $request->comment;
        }

        $quote->save();

        return redirect()->route('quote_detail', $quote->id);
    }


    public function getQuoteDelete($id) {
        $quote = Quote::findOrFail($id);

        $quote->delete();

        return redirect()->route('quote');
    }
}
