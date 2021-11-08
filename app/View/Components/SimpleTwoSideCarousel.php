<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimpleTwoSideCarousel extends Component
{
    public $title;
    public $text;
    public $images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $text, $images=[])
    {
        $this->title = $title;
        $this->text = $text;
        if($images > 0) { 
            $arrayImages = explode(',', $images);
            $this->images = $arrayImages;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.simple-two-side-carousel');
    }
}
