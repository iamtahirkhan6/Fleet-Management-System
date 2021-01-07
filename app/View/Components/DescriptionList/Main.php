<?php

namespace App\View\Components\DescriptionList;

use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $desc;
    public function __construct($title = null, $desc = null)
    {
        $this->title = $title;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.description-list.main');
    }
}
