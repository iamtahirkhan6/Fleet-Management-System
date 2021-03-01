<?php

namespace App\View\Components\forms\basicStacked;

use Illuminate\View\Component;

class imageUpload extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $wireModel;
    public function __construct($wireModel = null)
    {
        $this->wireModel = $wireModel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.basic-stacked.image-upload');
    }
}
