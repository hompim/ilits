<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TwoSideCard extends Component
{
    public $title;
    public $text;
    public $buttonText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $text, $buttonText)
    {
        $this->title = $title;
        $this->text = $text;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.two-side-card');
    }
}
