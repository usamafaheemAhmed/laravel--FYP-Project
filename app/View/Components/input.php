<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $name;
    public $type;
    public $placeholder;
    public $value;
    public $id;
    public $label;
    public $errorMessage;
    


    public function __construct($label,$name, $type, $id, $placeholder, $value, $errorMessage)
    {
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->id = $id;
        $this->label = $label;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
