<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * The Attr action.
     *
     * @var string
     */
    public $action;

    /**
     * The Attr method.
     *
     * @var string
     */
    public $method;

    /**
     * The Attr submit.
     *
     * @var string
     */
    public $submit;

    /**
     * Create a new component instance.
     *
     * @param string $action
     * @param string $method
     * @param string $submit
     */
    public function __construct($action = '', $method = 'POST', $submit = 'POST')
    {
        $this->action = $action;
        $this->method = $method;
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
