<div>
    <p>{{ $count }}</p>
    <input type='number' wire:model.blur='number'/>
    <button wire:click='increment({{$number}})'>test</button>
</div>
