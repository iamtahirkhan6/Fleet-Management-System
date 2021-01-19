<?php

namespace App\View\Components\tables\basic;

use Illuminate\View\Component;

class row extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $avatar;
    public $val;
    public $url;
    public $colorToggle;
    public $trueVal;
    public $falseVal;
    public $link;
    public $moneyBool;
    public $money;
    public $moneyVal;
    public $colorSlot;
    public $colorSlotVal;
    public $amount;
    public $amountVal;
    
    public function __construct($avatar = null, $amountVal = null, $val = null, $url = null, $colorToggle = null, $trueVal = null, $falseVal = null, $link = null, $money = null, $moneyBool = null, $moneyVal = null, $colorSlot = null, $colorSlotVal = null, $amount = null)
    {
        $this->avatar           = $avatar;
        $this->val              = $val;
        $this->url              = $url;
        $this->colorToggle      = (int)$colorToggle;
        $this->trueVal          = $trueVal;
        $this->falseVal         = $falseVal;
        $this->link             = $link;
        $this->moneyBool        = $moneyBool;
        $this->money            = $money;
        $this->moneyVal         = $moneyVal;
        $this->colorSlot        = $colorSlot;
        $this->colorSlotVal     = $colorSlotVal;
        $this->amount           = $amount;
        $this->amountVal        = $amountVal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tables.basic.row');
    }
}
