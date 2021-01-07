<?php

namespace App\View\Components\DescriptionList;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $amount;
    public $link;
    public $background;
    
    public function __construct($value, $background, $amount = null, $link = null)
    {
        $this->value = $value;
        $this->background = $background;
        $this->amount = $amount;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.description-list.row');
    }
}
