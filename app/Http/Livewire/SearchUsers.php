<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $users = [];
        if ($this->search!=null)
            $users = User::where('name','LIKE' ,'%'. $this->search . '%')->get();

        return view('livewire.search-users', compact('users'));
    }
}
