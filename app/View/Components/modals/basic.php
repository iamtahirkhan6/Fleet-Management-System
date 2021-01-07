<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;

class basic extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $title;
    public $desc;
    public $backTitle;
    public $link;
    public $color;

    public function __construct($icon = null, $title = null, $desc = null, $backTitle = null, $link = null, $color = null)
    {
        $this->icon         = $icon;
        $this->title        = $title;
        $this->desc         = $desc;
        $this->backTitle    = $backTitle;
        $this->link         = $link;
        $this->color        = $color;
    }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modals.basic');
    }
}
