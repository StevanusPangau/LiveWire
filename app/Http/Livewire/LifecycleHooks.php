<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class LifecycleHooks extends Component
{
    public $name = 'Evan';

    // seperti constructor function yang akan langsung di eksekusi

    // bisa juga dibuat param request
    // public function mount(Request $request, $name)
    // {
    //     $this->name = $request->input('name', $name);
    // }

    public function mount($name)
    {
        $this->name = $name;
    }

    // * public function hydrate()
    // {
    //     $this->name = 'hydrated@';
    // }

    // * mengubah data saat inputan diubah
    // public function updated()
    // {
    //     $this->name = strtoupper($this->name);
    // }

    // * Updated juga bisa dibuat untuk menjalankan var spesific
    public function updatedName()
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.lifecycle-hooks');
    }
}
