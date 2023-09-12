<div>
    {{-- Be like water. --}}
    <div class="title">
        <h3 class="text-dark">ACTION</h3>
    </div>

    <button class="btn btn-success mb-3" wire:click="doSomething">Do Something</button>

    <div class="alert alert-success mb-3">{{ $something }}</div>

    <h5>KeyDown Enter</h5>

    <form wire:submit.prevent='prosesMasukan'>
        <input type="text" class="form-control mb-3" wire:model="masukan">
        <button class="btn btn-primary mb-3">SAVE</button>
    </form>

    <div class="alert alert-success mb-3">{{ $tampil_masukan }}</div>

    <button class='btn btn-warning mb-3' wire:click="addTodo( 'ini param1', 'ini param2')">
        Add Todo
    </button>
    <div class='alert alert-warning'>
        {{ $param1 }} dan {{ $param2 }}
    </div>



</div>