<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $name = "Evan";

    public $loud = false;

    public $greeting = ['Hello'];

    // buat function baru
    public function resetName($name = "Stevanus")
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
