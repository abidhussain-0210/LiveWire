<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $name = "Abid Hussain";
    public function render()
    {
        return view('livewire.home' , [
            'name' => 'Abid Hussain'    
        ]);
    }
}
