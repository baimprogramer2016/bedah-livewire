<div class="col-md-3 mb-3">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('produk/'.$item_produk['gambar']) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $item_produk['nama_produk'] }}</h5>
            <p class="card-text text-success">Rp. {{ number_format($item_produk['harga']) }}</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary me-3">-</button>
                <input type="text" wire:model='jumlah_pesan' class="form-control text-center"
                    style="width:50px !important;background-color:#e5eced;">
                <button class="btn btn-primary ms-3" wire:click='tambahPesanan({{ $item_produk }})'>+</button>
            </div>
            <h5 class="card-footer mt-3 bg-success  text-white text-center">Total : {{ number_format($total_harga) }}
            </h5>

        </div>
    </div>
</div>