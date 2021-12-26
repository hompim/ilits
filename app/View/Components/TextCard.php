<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextCard extends Component
{
    public $texts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($texts)
    {
        $this->texts = explode('|', $texts);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-card');
    }
}
