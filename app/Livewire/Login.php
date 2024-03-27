<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (Auth::attempt($credentials, $this->remember)) {
            // Authentication passed...
            return $this->redirect('/dashboard', navigate: true);
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
