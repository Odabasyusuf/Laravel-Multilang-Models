<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestFirst extends Component
{

    public $name;

    public function mount()
    {
        $this->name = "asd";
    }

    public function render()
    {
        return view('livewire.test-first');
    }
}
