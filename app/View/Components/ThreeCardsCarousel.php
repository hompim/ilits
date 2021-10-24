<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCardsCarousel extends Component
{
    public $titles;
    public $texts;
    public $images;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titles, $images, $texts)
    {
            $this->titles = explode(',', $titles);
            $this->texts = explode('|', $texts);
            $this->images = explode(',', $images);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.three-cards-carousel');
    }
}
