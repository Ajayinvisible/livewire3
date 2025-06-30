<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $title;
    public $description;

    public function mount()
    {
        $this->title = "This is modal title";
        $this->description = "This is modal description from admin";
    }
    
    public function render()
    {
        return view('livewire.modal');
    }
}
