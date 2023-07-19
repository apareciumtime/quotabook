<?php

namespace App\Http\Controllers;

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
        return view('quote.quote_detail')->with('quote', $quote);
    }

    public function getQuoteCreate() {
        $books = Quote::all();
        return view('quote.quote_create')->with('books', $books);
    }
    public function postQuoteCreate(Request $request) {
        $books = Book::all();

        $validation = $request->validateWithBag('post', [
            'quote' => ['required'],
            'book' => ['required'],
            'chapter' => ['required'],
            'page' => ['required'],
        ]);

        $quote = new Quote();
        $quote->quote = $request->quote;

        $bookTitle = $request->book;
        $book = Book::where('title', $bookTitle)->first();

        if (!$book) {
            $book = new Book();
            $book->title = $bookTitle;
            $book->save();
        }

        $quote->book_id = $book->id;
        $quote->chapter = $request->chapter;
        $quote->page = $request->page;

        if ($request->has('comment')) {
            $quote->comment = $request->comment;
        }

        $quote->save();

        return redirect()->route('quote');
    }
    // public function getQuoteUpdate($id) {
    //     $quote = Quote::find($id);
    //     return view('quote.quote_update')->with('quote', $quote);
    // }

    public function deleteQuote() {
        return view('quote.quote');
    }
}
