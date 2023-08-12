<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:3|max:15',
        'email' => 'required|email',
        'password' => 'required|'
    ];

    public function savedata()
    {
        $this->validate();

        $userCreated = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        if($userCreated)
        {
            $this->dispatchBrowserEvent('swal:model');

            return redirect('/login');
        }
    }

    

    public function render()
    {
        return view('livewire.register')->layout('layout.app');
    }
}
