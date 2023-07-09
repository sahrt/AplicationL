<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $header, $item;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, $item)
    {
        $this->header= $header;
        $this->item= $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      
        return view('components.alert');
    }
 
}
 
?>
