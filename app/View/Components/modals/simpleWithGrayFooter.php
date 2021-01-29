<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;

class simpleWithGrayFooter extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */
    public $icon;
    public $title;
    public $body;
    public $footer;

    public function __construct($icon = null, $title = null, $body = null, $footer = null)
    {
        $this->icon   = $icon;
        $this->title  = $title;
        $this->body   = $body;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modals.simple-with-gray-footer');
    }
}
