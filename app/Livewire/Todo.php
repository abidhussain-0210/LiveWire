<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos =[] , $item;

    public function render()
    {
        return view('livewire.todo');
    }
    public function add(){
        $this->todos[] = $this->item;
        $this->reset(['item']);
    }
    public function remove($index){
        unset($this->todos[$index]);
        $this->todos = array_values($this->todos);
    }
}
