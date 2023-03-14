<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class NestingSayHi extends Component
{
    public $name;
    public $contact;

    // public function mount($name)
    // {
    //     $this->name = $name;
    // }

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.nesting-say-hi');
    }
}
