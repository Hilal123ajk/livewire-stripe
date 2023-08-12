<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.login')->layout('layout.app');
    }
}
