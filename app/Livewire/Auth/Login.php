<?php

namespace App\Livewire\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[layout('layouts.dashboard')]
class Login extends Component
{
    public $email , $password;

    public function render()
    {
        return view('livewire.auth.login');
    }
    public function save(){

        $this->validate([

            'email' => 'required|email',
            'password' => 'required'

        ]);

        dd($this->email , $this->password);
    }

    // public $email;
    // public $count;
    // public $name;

    // public function mount($name=null)
    // {
    //     $this->name = $name;
    // }
    // public function render()
    // {
    //     $this->count++;
    //     return view('livewire.auth.login');
    // }
}
