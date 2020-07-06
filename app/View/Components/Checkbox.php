<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * The Attr name.
     *
     * @var string
     */
    public $name;

    /**
     * The Choices.
     *
     * @var array
     */
    public $choices;

    /**
     * The Required.
     *
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
     * @param array $choices
     * @param bool $required
     * @param string $locale
     * @param string $oldValue
     */
    public function __construct($name = '', $choices=[], $required=false, $locale='en', $oldValue='')
    {
        $this->name = $name;
        $this->choices = $choices;
        $this->required = $required;
        $this->locale = $locale;
        $this->oldValue = $oldValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
