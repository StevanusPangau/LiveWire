<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Events extends Component
{
    public $contacts;

    protected $listeners = ['foo' => '$refresh'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    // public function refreshChildren()
    // {
    //     // bisa juga ditambah parameter
    //     $this->emit('refreshChildren', 'foo');
    // }

    public function render()
    {
        return view('livewire.events');
    }
}
