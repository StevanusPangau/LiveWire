<div>
    {{-- <input wire:model="name" type="text"> --}}

    Hello {{ $contact->name }} : {{ now() }}

    <button wire:click="$refresh">Refresh</button>
</div>
