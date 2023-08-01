<?php

namespace App\View\Components;

use App\Http\Controllers\BookShelfController;
use App\Models\BookShelf;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class BookshelfItem extends Component
{

    public $bookshelf;
    public $bookAmount;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->bookshelf = BookShelf::find($id);
        $this->bookAmount = $this->bookshelf->book_amount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookshelf-item');
    }
}
