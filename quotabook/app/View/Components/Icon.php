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
    public function __construct($icon)
    {
        $this->icon = $icon;

        if ($icon == "edit") {
            $this->link_to = "quote";
        } else {
            $this->link_to = "quote";
        }
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
