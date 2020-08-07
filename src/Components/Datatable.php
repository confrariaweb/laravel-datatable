<?php

namespace ConfrariaWeb\Datatable\Components;

use Illuminate\View\Component;

class Datatable extends Component
{

    public $config;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('datatable::components.datatable', $this->config);
    }
}
