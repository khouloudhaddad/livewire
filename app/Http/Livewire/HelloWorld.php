<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function increment(){
        $this->count ++;
    }
}
