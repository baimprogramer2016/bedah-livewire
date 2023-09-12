<div>
    <div class="title">
        <h3>BELANJA</h3>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($data_produk as $item_produk)
            @livewire('item-produk', ['item_produk' => $item_produk])
            @endforeach
        </div>
    </div>
</div>