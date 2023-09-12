<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $msg_error = "";
    public $alert = false;

    public function increment()
    {
        $this->count++;
        $this->msg_error = "";
        $this->alert = false;
    }
    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        }

        if ($this->count == 0) {
            $this->msg_error = "Udah Bang, udh cukupp";
            $this->alert = true;
        }
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
