<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardComponent extends Component
{
    public $title;
    public $desc;
    public function mount($data_card)
    {
        $this->title = $data_card['title'];
        $this->desc = $data_card['desc'];
    }
    public function render()
    {
        return view('livewire.card-component');
    }
}
