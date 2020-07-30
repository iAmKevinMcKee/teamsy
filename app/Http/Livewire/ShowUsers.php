<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.show-users');
    }
}
