<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CarouselWithHeader extends Component
{
    public $headerTitle;
    public $titles;
    public $texts;
    public $buttonText;
    public $images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonText,$headerTitle, $titles = [], $texts = [], $images = [])
    {
        $this->headerTitle = $headerTitle;
        $this->buttonText = $buttonText;
        $this->images = $images;
        if($titles) 
            $this->titles = explode(',', $titles);
        if($texts)
            $this->texts = explode('|', $texts);
        if($images)
            $this->images = explode(',', $images);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-with-header');
    }
}
