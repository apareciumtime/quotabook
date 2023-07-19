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
    public $model;
    public $id;
    public $link_to;

    public function __construct($icon, $model = "", $id = "")
    {
        $this->icon = $icon;
        $this->model = $model;
        $this->id = $id;

        if ($model == "quote") {
            if($icon == "create") {
                $this->link_to = "quote_create";
            }
            elseif($icon == "edit") {
                $this->link_to = "quote_update";
            }
            elseif($icon == "delete") {
                $this->link_to = "quote_delete";
            }
        }
        elseif ($model == "bookshelf") {
            $this->link_to = "book_shelf";
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
