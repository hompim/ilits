<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreeCards extends Component
{
    public $title1;
    public $title2;
    public $title3;
    public $img1;
    public $img2;
    public $img3;
    public $text1;
    public $text2;
    public $text3;
    public $list1;
    public $list2;
    public $list3;
    // Depends on your three cards structure, using text or list.

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title1 = '', $title2 = '', $title3 = '', $img1 = '', $img2 = '', $img3 = '', $text1 = '', $text2 = '', $text3 = '', $list1 = '', $list2 = '', $list3 = '')
    {
      $this->title1 = $title1;
      $this->title2 = $title2;
      $this->title3 = $title3;
      $this->img1 = $img1;
      $this->img2 = $img2;
      $this->img3 = $img3;
      $this->text1 = $text1;
      $this->text2 = $text2;
      $this->text3 = $text3;
      $this->list1 = json_encode($list1);
      $this->list2 = json_encode($list2);
      $this->list3 = json_encode($list3);
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
