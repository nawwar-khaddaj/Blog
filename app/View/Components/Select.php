<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends BaseComponent
{

    /**
     * @var array
     */
    public $options;

    /**
     * @var array
     */
    public $selected;

    /**
     * @var bool
     */
    public $multiple;


    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param bool $required
     * @param string $locale
     * @param null $oldValue
     * @param array $options
     * @param bool $multiple
     * @param array $selected
     */
    public function __construct($name = '', $required = false, $locale='en', $oldValue=null, $options = [], $multiple = false, $selected=[])
    {

        parent::__construct($name, $required, $locale, $oldValue);
        $this->options = $options;
        $this->multiple = $multiple;
        $this->locale = $locale;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
