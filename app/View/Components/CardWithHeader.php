<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardWithHeader extends Component
{
    public $title;
    public $image;
    public $text;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image, $text)
    {
        $this->title = $title;
        $this->image = $image;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-with-header');
    }
}
