<?php

namespace App\View\Components;


use Illuminate\View\View;

class Number extends BaseComponent
{

    /**
     * @var integer
     */
    public $min;

    /**
     * @var integer
     */
    public $max;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param bool $required
     * @param string $locale
     * @param integer $oldValue
     * @param int $min
     * @param int $max
     */
    public function __construct($name = '', $required = false, $locale='en', $oldValue=null, $min = 0, $max = 999999)
    {
        parent::__construct($name, $required, $locale, $oldValue);
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.number');
    }
}
