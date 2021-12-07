<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCardsContainerCarousel extends Component
{
    public $titles;
    public $images;
    public $id;
    public $route;
    public $carouselId;
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titles, $images, $id, $route, $slug, $carouselId="threeCardsContainerCarousel")
    {
            $this->titles = explode(',', $titles);
            $this->images = explode(',', $images);
            $this->id = explode(',',$id);
            $this->route = $route;
            $this->slug = explode(',',$slug);
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
