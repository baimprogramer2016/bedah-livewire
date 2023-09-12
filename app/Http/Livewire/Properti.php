<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properti extends Component
{
    public $title;

    public $search;

    public function mount()
    {
        $this->title = 'Kita Belajar Properties';
    }

    public function search()
    {
    }


    public function render()
    {
        return view('livewire.properti');
    }
}
