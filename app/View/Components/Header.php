<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public string $image;


    /**
     * The alert message.
     *
     * @var array
     */
    public array $breadcrumbs;

    /**
     * Create a new component instance.
     *
     * @param string $image
     * @param array $breadcrumbs
     * @return void
     */
    public function __construct(string $image, array $breadcrumbs)
    {
        $this->image = $image;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
