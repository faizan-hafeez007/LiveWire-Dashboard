<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::logout();
        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.logout');
    }

    // public function logout()
    // {
    //     if (Auth::check()) {
    //         Auth::logout();
    //     }

    //     return $this->redirect('/login', navigate: true);
    // }

    // public function render()
    // {
    //     return <<<'HTML'
    //         <button wire:click="logout">Logout</button>
    //     HTML;
    // }

}
