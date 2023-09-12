<div>
    <div class="title">
        <h3>LIFE CYCLE</h3>
    </div>

    <div class="container">
        <input type="text" class="form-control mb-3" wire:model.defer='nama'>
        <button class="btn btn-success" wire:click='tampil'>Tampil</button>
        <p>{{ $tampil_nama }}</p>

        <ul>
            <li>Mount : {{ $countMount }}</li>
            <li>Hydrate : {{ $countHydrate }}</li>
            <li>Updating : {{ $countUpdating }}</li>
            <li>Updated : {{ $countUpdated }}</li>
            <li>Render : {{ $countRender }}</li>
        </ul>

    </div>
</div>