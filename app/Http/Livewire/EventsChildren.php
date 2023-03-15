<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class EventsChildren extends Component
{
    public $contact;

    protected $listeners = ['foo' => '$refresh'];

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function emitFoo()
    {
        $this->emit('foo');
    }

    public function render()
    {
        return view('livewire.events-children');
    }
}
