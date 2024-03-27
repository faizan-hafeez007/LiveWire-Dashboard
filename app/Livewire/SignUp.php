<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SignUp extends Component
{
    public $name;
    public $email;
    public $password;

    public function signup()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
