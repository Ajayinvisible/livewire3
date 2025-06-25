<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('User page title')]
class UsersPage extends Component
{
    public function render()
    {
        return view('livewire.users-page');
    }
}
