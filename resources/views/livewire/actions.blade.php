<div>
    <input wire:model="name" type="text">

    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{ implode(', ', $greeting) }} {{ $name }}
    @if ($loud)
        !
    @endif

    {{-- passing variable --}}
    {{-- <button wire:click="resetName('Bingo')">Reset Name</button> --}}

    {{-- ambil value dari nama button --}}
    {{-- <button wire:click="resetName($event.target.innerText)">Reset Name</button> --}}

    {{-- selain click wire juga bisa dibuat dengan event lainnya, seperti mouseener, keydown, custom-event, dll. --}}
    {{-- <button wire:mouseenter="resetName('Bingo')">Reset Name</button> --}}

    {{-- versi pendek daripada memanggil fungction untuk mengubah data langsung saja pakai $set('nama var', 'value') --}}
    <form action="#" wire:submit="$set('name', 'Bingo')">
        <button>Reset Name</button>
    </form>
</div>
