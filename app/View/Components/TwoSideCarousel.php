<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TwoSideCarousel extends Component
{
    public $titles;
    public $texts;
    public $images;
    public $buttonTexts;

    /**
     * Create a new component instance.
     *
     * @return voids
     */
    public function __construct($titles, $texts, $images, $buttonTexts = "")
    {
        $titles = explode(',', $titles);
        $this->titles = $titles;
        $texts = explode('|', $texts);
        $this->texts = $texts;
        $images = explode(',', $images);
        $this->images = $images;
        if($buttonTexts) {
            $buttonTexts = explode(',', $buttonTexts);
            $this->buttonTexts = $buttonTexts;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.two-side-carousel');
    }
}
