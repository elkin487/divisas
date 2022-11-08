<div>
    <div class="row">
        <div class="col-md-4">
            <select class="form-select" wire:model='to'>
                @foreach ($array as $item)
                <option value="{{$item['COD']}}">{{$item['NAME']}} -- {{$item['COD']}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select" wire:model='from'>
                @foreach ($array as $item)
                <option value="{{$item['COD']}}">{{$item['NAME']}} -- {{$item['COD']}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" wire:model='amount' placeholder="amount">
        </div>
    </div>

    <div class="row mt-4">
        <span>Total: {{$result}}</span>
    </div>
</div>