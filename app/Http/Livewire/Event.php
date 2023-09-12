<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Event extends Component
{

    public $message;
    protected $listeners = ['postAdded' => 'tampilkanKalimat'];

    public function tampilkanKalimat()
    {
        $this->message = "Dunia hanya sementara, akhirat abadi";
        $this->dispatchBrowserEvent('tampilkanAlert', ['pesan' => 'Tampilkan di Javascript']);
    }
    public function render()
    {
        return view('livewire.event');
    }
}
