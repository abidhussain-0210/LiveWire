<div>
    <h1>Login Page</h1><br>
    <form wire:submit="save" method="POST">
        <input type="text" wire:model.live.debounce='email' class ="bg-gray-white p-2" placeholder="Type Email">
            @error('email')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        <input type="password" wire:model.live.debounce="password" class ="bg-gray-white p-2" placeholder="Password">
            @error('password')
            <p class="text-red-600">{{ $message }}</p>
            @enderror
        <button type="submit">Login</button>
    </form> 
</div>


{{-- <div>
    <h1>Login Page</h1><br>
    <input type="email" wire:model.live.debounce='email' class ="p-2" placeholder="Type Email"><br>
    {{ $email }}
    <h1>Count : {{ $count }}</h1>
    <h1>Name : {{ $name }}</h1>
</div> --}}
