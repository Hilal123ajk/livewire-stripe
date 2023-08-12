<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cancel extends Component
{
    public function render()
    {
        return view('livewire.cancel')->layout('layout.app');
    }
}
