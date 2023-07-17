<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DecFrame extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $choice;
    public function __construct($choice)
    {
        $this->choice = $choice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dec-frame');
    }
}
