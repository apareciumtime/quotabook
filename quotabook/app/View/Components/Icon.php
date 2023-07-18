<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $icon;
    public $link_to;
    public function __construct($icon, $link_to = "quote_create")
    {
        $this->icon = $icon;
        $this->link_to = $link_to;

        // if ($link_to == "quote") {
        //     $this->link_to = "quote_create";
        // } elseif ($link_to == "book") {
        //     $this->link_to = "quote1";
        // } else {
        //     $this->link_to = "quote";
        // }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
