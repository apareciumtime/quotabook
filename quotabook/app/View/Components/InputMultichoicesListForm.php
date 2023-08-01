<?php

namespace App\View\Components;

use App\Models\Book;
use Illuminate\View\Component;

class InputMultichoicesListForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $books;
    public function __construct()
    {
        $this->books = Book::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-multichoices-list-form');
    }
}
