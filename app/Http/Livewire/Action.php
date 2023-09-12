<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{

    public $something;

    public $masukan;
    public $tampil_masukan;

    public $param1, $param2;

    public function render()
    {
        return view('livewire.action');
    }

    public function doSomething()
    {
        $this->something = 'Dunia Hanya Sementara';
    }
    public function prosesMasukan()
    {
        $this->tampil_masukan = $this->masukan;
    }

    public function addTodo($param1, $param2)
    {
        $this->param1 = $param1;
        $this->param2 = $param2;
    }
}
