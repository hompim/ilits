<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TwoSideSeparatedCarousel extends Component
{
    public $titles;
    public $texts;
    public $images;
    public $carouselId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titles, $images, $texts,$carouselId="twoSideSeparatedCarousel")
    {
            $this->titles = explode(',', $titles);
            $this->texts = explode('|', $texts);
            $this->images = explode(',', $images);
            $this->carouselId= $carouselId;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.two-side-separated-carousel');
    }
}
