<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCardsContainerCarousel extends Component
{
    public $titles;
    public $images;
    public $carouselId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titles, $images, $carouselId="threeCardsContainerCarousel")
    {
            $this->titles = explode(',', $titles);
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
        return view('components.three-cards-container-carousel');
    }
}
