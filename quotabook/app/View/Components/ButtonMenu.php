<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $label;
    public $link_to;

    public function __construct($label)
    {
        $this->label = $label;

        if($label == 'QUOTE'){
            $this->link_to = 'quote';
        }
        else if($label == 'BOOK SHELF'){
            $this->link_to ='book_shelf';
        }
        else if($label == 'WRITING'){
            $this->link_to ='writing';
        }
        else if($label == 'MANAGE LIBRARY'){
            $this->link_to ='manage_library';
        }
        else {
            $this->link_to = "book";
        }
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-menu');
    }
}
