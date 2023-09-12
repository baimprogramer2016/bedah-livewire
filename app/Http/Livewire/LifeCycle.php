<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifeCycle extends Component
{
    public $nama, $tampil_nama;
    public $countMount, $countHydrate, $countUpdating, $countUpdated, $countRender;

    public function mount()
    {
        $this->countMount++;
    }

    public function hydrate()
    {
        $this->countHydrate++;
    }

    public function updating($name, $value)
    {
        $this->countUpdating++;
    }

    public function updated($name, $value)
    {
        $this->countUpdated++;
    }

    public function tampil()
    {
        $this->tampil_nama = $this->nama;
    }
    public function render()
    {
        $this->countRender++;
        return view('livewire.life-cycle');
    }
}
