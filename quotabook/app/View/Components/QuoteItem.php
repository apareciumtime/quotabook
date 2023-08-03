<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quote;
use App\Models\Book;
use App\Models\CommonBook;

class QuoteItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $quote;
    public $book;
    public function __construct($id)
    {
        $this->quote = Quote::find($id);
        $this->book = CommonBook::where('id', $this->quote->books_id)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.quote-item');
    }
}
