<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCardsCarouselWithHeader extends Component
{
        public $titles;
        public $images;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($titles, $images)
        {
                $this->titles = explode(',', $titles);
                $this->images = explode(',', $images);
        }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.three-cards-carousel-with-header');
    }
}
