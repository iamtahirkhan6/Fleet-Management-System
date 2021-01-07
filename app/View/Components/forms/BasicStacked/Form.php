<?php

namespace App\View\Components\forms\BasicStacked;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $backLink;
    public $backLinkTitle;
    public function __construct($backLink = null, $backLinkTitle = null)
    {
        $this->backLink         = $backLink;
        $this->backLinkTitle    = $backLinkTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.basic-stacked.form');
    }
}
