<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectClasses extends Component
{
    public $classes;
    public $selecionado;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($classes, $selecionado)
    {
        $this->classes = $classes;
        $this->selecionado = $selecionado;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-classes');
    }
}
