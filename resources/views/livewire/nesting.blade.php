<div>
    {{-- @foreach ($names as $name)
        <!-- key() optional -->
        @livewire('nesting-say-hi', ['name' => $name], key($name))
    @endforeach --}}


    {{-- contoh mengambil data dari model db --}}
    @foreach ($contacts as $contact)
        <div>
            @livewire('nesting-say-hi', ['contact' => $contact], key($contact->name))

            <button wire:click="removeContact('{{ $contact->name }}')">Remove</button>
        </div>
    @endforeach

    <hr>

    <button wire:click="$refresh">Refresh</button>

    {{ now() }}
</div>
