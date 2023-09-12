<?php

namespace App\Http\Livewire;

use App\Models\Keranjang;
use Livewire\Component;

class ItemProduk extends Component
{
    public $jumlah_pesan = 0;
    public $nama_produk;

    public $gambar;
    public $harga;

    public $id_produk;

    public $item_produk;

    public $total_harga = 0;

    public function mount($item_produk)
    {
        $this->item_produk = $item_produk;
        $data_saat_ini = Keranjang::where('id_produk', $item_produk['id'])->first();
        $this->jumlah_pesan = $data_saat_ini->qty ?? $this->jumlah_pesan;
        $this->total_harga = $data_saat_ini->total_harga ?? $this->total_harga;
    }

    public function tambahPesanan($item_produk)
    {
        $this->jumlah_pesan++;

        $data_keranjang = Keranjang::where('id_produk', $item_produk['id'])->first();

        $total_harga = $item_produk['harga'] * $this->jumlah_pesan;
        if ($data_keranjang == null) {
            Keranjang::create([
                "id_produk" => $item_produk['id'],
                "qty" => $this->jumlah_pesan,
                "total_harga" => $total_harga
            ]);
        } else {
            $data_keranjang->qty = $this->jumlah_pesan;
            $data_keranjang->total_harga = $total_harga;
            $data_keranjang->update();
        }
        $this->total_harga =  $total_harga;

        $this->emitTo('navbar', 'addOrder');
    }
    public function render()
    {
        return view('livewire.item-produk');
    }
}
