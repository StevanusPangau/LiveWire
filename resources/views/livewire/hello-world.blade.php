<div>
    {{-- tambahkan .debounce untuk mengatur datanya negeload berapa lama --}}
    {{-- <input wire:model.debounce.1000ms="name" type="text"> --}}

    {{-- tambahkan .lazy untuk ngerender data pada saat user klik diluar input --}}
    {{-- <input wire:model.lazy="name" type="text"> --}}

    <input wire:model="name" type="text">

    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>


    {{-- Hello {{ strtoupper($name) }} --}}
    {{-- Hello {{ $name }} --}}
    {{ implode(', ', $greeting) }} {{ $name }}

    @if ($loud)
        !
    @endif
</div>
