<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::logout();

        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
