<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardWithHeader extends Component
{


    public $title;
    public $text;
    public $image;
    public $color1;
    public $color2;
    public $color3;
    


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $color1, $color2, $color3, $title, $text, $image )
    {
        $this->color1 = $color1;
        $this->color2 = $color2;
        $this->color3 = $color3;
        
        $this->title = $title;
        $this->text = $text;
        $this->image = $image;
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
