<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quote;

class QuoteItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $quote;
    public function __construct($id)
    {
        $this->quote = Quote::find($id);
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
