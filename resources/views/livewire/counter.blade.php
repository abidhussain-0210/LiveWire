<div>
    <h1>Counter</h1>
    {{-- <button wire:click="increment"><span class="text-1xl font-bold">+</span></button> --}}
    <button wire:click="increment"><i class="fas fa-plus text-1xl"></i>
    </button>
    {{ $number }}

    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>
     
        <span x-text="count"></span>
    </div>
</div>
