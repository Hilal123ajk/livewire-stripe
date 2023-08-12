<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; // Make sure to import the exception class

class Success extends Component
{
    public function render()
    {
        return view('livewire.success')->layout('layout.app');
    }
}
