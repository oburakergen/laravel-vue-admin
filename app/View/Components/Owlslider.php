<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Owlslider extends Component
{
    /**
     * The alert message.
     *
     * @var array
     */
    public array $sliders;
    /**
     * Create a new component instance.
     *
     * @param array $sliders
     * @return void
     */
    public function __construct(array $sliders)
    {
        $this->sliders = $sliders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.owlslider');
    }
}
