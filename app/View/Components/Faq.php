<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Faq extends Component
{
    /**
     * The alert message.
     *
     * @var array
     */
    public array $faqs;

    /**
     * Create a new component instance.
     *
     * @param array $faqs
     * @return void
     */
    public function __construct(array $faqs)
    {
        $this->faqs = $faqs;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faq');
    }
}
