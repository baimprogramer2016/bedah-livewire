<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class Belanja extends Component
{
    public $data_produk;

    public function mount()
    {
        $data_produk = Produk::get();
        $this->data_produk = $data_produk;
    }
    public function render()
    {
        return view('livewire.belanja');
    }
}
