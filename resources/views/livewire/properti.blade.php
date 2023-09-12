<div>
    <div class="title">
        <h3 class="text-dark">PROPERTIES</h3>
    </div>
    <p class="text-secondary text-center"></p>
    <div class="container">
        {{ $title }}<br>

        <input class="form-control mt-3" type="text" wire:model.defer="search" placeholder="Masukan Nama">
        <button class=" btn btn-success mt-3" wire:click="search">Search</button>
        <div class="alert alert-success mt-3">
            {{ $search }}
        </div>

    </div>
</div>