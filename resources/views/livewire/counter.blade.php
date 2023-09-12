@push('livewire-style')
@livewireStyles
@endpush
@push('livewire-script')
@livewireScripts
@endpush
<div>
    {{-- Be like water. --}}
    <div class="title">
        <h3 class="text-dark">COUNTER</h3>
    </div>
    <p class="text-secondary text-center">Percobaan awal sebagai pengenalan terhadapan Livewire, Pada Counter dibawah
        ini sudah
        menggunakan binding data</p>
    <div class="mt-5" style="text-align: center">
        <button class="btn btn-me text-white" wire:click="decrement">- Kurang</button>
        <button class="btn btn-me text-white" wire:click="increment">+ Tambah</button>

        <h1 class="text-secondary mt-5" style="font-size: 100px;">Nilai => {{ $count }}</h1>

        @if ($alert == true)
        <div class="alert alert-danger">
            {{ $msg_error }}
        </div>
        @endif

    </div>
</div>