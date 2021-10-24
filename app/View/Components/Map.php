<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Map extends Component
{
    public $src;
    public $href;
    public $background;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src = '', $href='/', $background='')
    {
        $this->src = $src;
        $this->href = $href;
        $this->background = $background;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map');
    }
}
