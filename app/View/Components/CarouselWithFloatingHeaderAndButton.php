<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CarouselWithFloatingHeaderAndButton extends Component
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
    public function __construct($headerTitle, $buttonText, $titles = [], $texts = [], $images = [])
    {
        $this->headerTitle = $headerTitle;
        $this->buttonText = $buttonText;
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
        return view('components.carousel-with-floating-header-and-button');
    }
}
