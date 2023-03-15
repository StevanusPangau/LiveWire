<div>
    @foreach ($contacts as $contact)
        @livewire('nesting-say-hi', ['contact' => $contact], key($contact->name))
    @endforeach

    <hr>

    {{ now() }}

    <button wire:click="refreshChildren">Refresh Children</button>
</div>
