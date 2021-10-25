<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BannerWithCornerHeader extends Component
{

    public $title;
    public $color;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $color, $image)
    {
        $this->title = $title;
        $this->color = $color;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner-with-corner-header');
    }
}
