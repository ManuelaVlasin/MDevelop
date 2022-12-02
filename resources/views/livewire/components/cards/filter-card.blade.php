<div style="width: 227px;" class="card mx-auto">
    <div class="card-header" wire:click="toggleTab" style="cursor: pointer">
        <div class="row">
            <div class="col" style="flex-basis: auto; width: 177px;" onselectstart="return false">
                    <span style="font-size: 14px; font-weight: 700">
                        {{ $header }}
                    </span>
            </div>
            <div class="col" style="flex-basis: auto; width: 40px">
                <i class="fa fa-angle-{{ $open ? 'up' : 'down' }}" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="card-body"
         style="display: {{ $open ? '' : 'none' }}; max-height: 171px; overflow-y: scroll; font-size: 13px">
        @forelse($options as $id => $name)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                       wire:click="selectOption({{$id}})">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $name }}
                </label>
            </div>
        @empty
            {{ _('No Results') }}
        @endforelse
    </div>
</div>

<style>
    ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 7px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }
</style>
