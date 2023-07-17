<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

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
        return view('quote.quote_create');
    }

    // public function getQuoteUpdate($id) {
    //     $quote = Quote::find($id);
    //     return view('quote.quote_update')->with('quote', $quote);
    // }

    public function deleteQuote() {
        return view('quote.quote');
    }
}
