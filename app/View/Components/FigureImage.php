<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FigureImage extends Component
{
    public $img;
    public $title;
    public $text;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $title, $text){
        $this->img = $img;
        $this->title = $title;
        $this->text = $text;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.figure-image');
    }
}
