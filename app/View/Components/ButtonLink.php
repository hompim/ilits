<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $href;
    public $angle;
    public $colorFrom;
    public $colorTo;
    public $isExternalLink;
    public $isBlur;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = '#', $angle = '0deg', $colorFrom = '', $colorTo = '', $isExternalLink = false, $isBlur = 0)
    {
        $this->href = $href;
        $this->angle = $angle;
        $this->colorFrom = $colorFrom;
        $this->colorTo = $colorTo;
        $this->isExternalLink = $isExternalLink;
        $this->isBlur = $isBlur;
    }

    public function checkIsExternalLink()
    {
        return $this->isExternalLink ? '_blank' : '_self';
    }

    public function checkIsBlur()
    {
        return $this->isBlur ? $this->isBlur : 0;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
