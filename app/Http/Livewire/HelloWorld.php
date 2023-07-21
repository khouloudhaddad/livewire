<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'khouloud';
    
    public function render()
    {
        return view('livewire.hello-world');
    }
}
