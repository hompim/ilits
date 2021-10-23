<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OuterArrowTwoSlideCarousel extends Component
{
    public $sourceImg1;
    public $sourceImg2;
    public $aktivitas1;
    public $aktivitas2;
    public $deskripsiAktivitas1;
    public $deskripsiAktivitas2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sourceImg1 = "", $sourceImg2 = "", $aktivitas1 = "", $aktivitas2 = "", $deskripsiAktivitas1 = "", $deskripsiAktivitas2 = "")
    {
      $this->sourceImg1 = $sourceImg1;
      $this->sourceImg2 = $sourceImg2;
      $this->aktivitas1 = $aktivitas1;
      $this->aktivitas2 = $aktivitas2;
      $this->deskripsiAktivitas1 = $deskripsiAktivitas1;
      $this->deskripsiAktivitas2 = $deskripsiAktivitas2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.outer-arrow-two-slide-carousel');
    }
}
