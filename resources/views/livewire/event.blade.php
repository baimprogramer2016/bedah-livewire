<div>
    <div class="title">
        <h3>EVENT</h3>
    </div>
    <div class="container">
        <button class="btn btn-success" wire:click="$emit('postAdded')">POST</button>
        <p class="bg-success mt-3 text-white">{{ $message }}</p>
    </div>
    <div class="container">
        <button class="btn btn-success mb-3" wire:click="$emitTo('navbar','addOrder')">Order</button>
    </div>
    <div class="container">
        <button class="btn btn-primary" wire:click="$emit('addOrder')">Order</button>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('tampilkanAlert', event => {
        alert(event.detail.pesan);
    })
</script>
@endpush