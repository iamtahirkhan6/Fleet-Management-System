<?php

namespace App\View\Components\forms\BasicStacked;

use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $array;
    public function __construct($title = null, $array = null)
    {
        $this->title = $title;
        $this->array = $array;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.basic-stacked.dropdown');
    }
}
