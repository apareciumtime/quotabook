<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function getQuote() {
        return view('quote.quote');
    }

    public function getQuoteDetail() {
        return view('quote.quote');
    }

    public function updateQuote() {
        return view('quote.quote');
    }

    public function deleteQuote() {
        return view('quote.quote');
    }
}
