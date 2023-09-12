<div>
    <div class="title">
        <h3>NESTING COMPONENTS</h3>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data_card as $item)
            @livewire('card-component', ['data_card' => $item])
            @endforeach
        </div>
    </div>
</div>