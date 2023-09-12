<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;

class Navbar extends Component
{

    public $jumlah_order = 0;
    public $total_harga = 0;

    protected $listeners = ['addOrder' => 'mount'];

    public function mount()
    {
        $data_keranjang = Keranjang::get();
        $this->jumlah_order = $data_keranjang->sum('qty');
        $this->total_harga = $data_keranjang->sum('total_harga');
    }
    public function order()
    {
        $this->jumlah_order++;
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
