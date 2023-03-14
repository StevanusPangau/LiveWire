<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Nesting extends Component
{
    public $contacts;
    public $names = ['Evan', 'Stevanus', 'Pangau'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.nesting');
    }
}
