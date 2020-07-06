<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class BaseComponent extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var boolean
     */
    public $required;

    /**
     * The Attr locale.
     *
     * @var string
     */
    public $locale;

    /**
     * The Attr oldValue.
     *
     */
    public $oldValue;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param bool $required
     * @param string $locale
     * @param string $oldValue
     */
    public function __construct($name = '', $required = false, $locale='en', $oldValue='')
    {
        $this->name = $name;
        $this->required = $required;
        $this->locale = $locale;
        $this->oldValue = $oldValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
//        return view('components.text-area');
    }
}
