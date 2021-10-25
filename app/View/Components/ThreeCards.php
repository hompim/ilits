<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCards extends Component
{
    public $fokus1;
    public $fokus2;
    public $fokus3;
    public $deskripsiFokus1;
    public $deskripsiFokus2;
    public $deskripsiFokus3;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fokus1 = '', $fokus2 = '', $fokus3 = '', $deskripsiFokus1 = '', $deskripsiFokus2 = '', $deskripsiFokus3='')
    {
      $this->fokus1 = $fokus1;
      $this->fokus2 = $fokus2;
      $this->fokus3 = $fokus3;
      $this->deskripsiFokus1 = $deskripsiFokus1;
      $this->deskripsiFokus2 = $deskripsiFokus2;
      $this->deskripsiFokus3 = $deskripsiFokus3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.three-cards');
    }
}
