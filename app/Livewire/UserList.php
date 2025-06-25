<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    
    public $search;

    public function update()
    {
        // $this->resetPage();
    }

    public function mount($search)
    {
        $this->search = $search;
    }
    
    public function render()
    {
        $users = User::orderBy('created_at', 'desc')
        ->where('name', 'like', "%{$this->search}%")
        ->paginate(5);
        return view('livewire.user-list',[
            'users' => $users
        ]);
    }
}
