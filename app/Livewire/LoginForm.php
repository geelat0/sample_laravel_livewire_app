<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{

    public $email;
    public $password;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/dashboard');
        } else {
            session()->flash('error', 'Invalid email or password');
        }
    }

    public function render()
    {
        
        return view('livewire.login-form');
    }
}
