<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $href;
    public $isExternalLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = '#', $isExternalLink = false)
    {
        $this->href = $href;
        $this->isExternalLink = $isExternalLink;
    }

    public function checkIsExternalLink()
    {
        return $this->isExternalLink ? '_blank' : '_self';
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
