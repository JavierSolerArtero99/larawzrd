<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $title = 'Post title...';
    
    public function render()
    {
        return view('livewire.test');
    }
}
