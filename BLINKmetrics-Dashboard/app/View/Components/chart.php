<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class chart extends Component
{
    /*
    * @var string
    */
    public $chartype;
    /*
    * @var string
    */
    public $color;
    /*
    * @var string
    */
    // public $data;
    /**
     * Create a new component instance.
     * @param  string  $chartype
     * @param  string  $color
     * @param  array  $data
     * @return void
     */
    public function __construct($color)
    {
        //
        // $this->chartype = $chartype; $chartype
        $this->color = $color;
        // $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chart');
    }
}
