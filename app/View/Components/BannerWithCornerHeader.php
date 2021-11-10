<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BannerWithCornerHeader extends Component
{
    public $title;
    public $image;
    public $href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title='', $image='', $href='')
    {
        $this->title = $title;
        $this->image = $image;
        $this->href = $href;
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
