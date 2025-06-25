<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]      // Uncomment this line to set a layout for the component
#[Title('Home page title')]  // Uncomment this line to set a title for the component
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
