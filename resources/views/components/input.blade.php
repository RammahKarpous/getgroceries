<div class="form__group">
    @if ($type == 'text' || $type == 'email' || $type == 'password')
        <label for="{{ $for }}">{{ $label }}</label>
        <input type="{{ $type }}" id="{{ $for }}" name="{{ $for }}" class="form__input form__input--{{ $type }}" value="{{ old($for) }}">
    @endif

    @if ($type == 'file')
        <label for="{{ $for }}" class="form__picture-wrapper">
            <img src="{{ 
                auth()->user()->profile_picture ? 
                asset('storage/users/' . auth()->user()->profile_picture) : 
                asset('images/default-profile-picture.svg')}}" alt="">

            <div class="icon-wrapper">
                <x-icon icon="camera" colour="white" />
            </div>
        </label>
        <input type="{{ $type }}" id="{{ $for }}" name="{{ $for }}" class="form__input form__input--{{ $type }}" value="{{ old($for) }}">
    @endif

    @error($for)
        <small> {{ $message }} </small>
    @enderror

    {{-- @if ($type == 'password')
        <p>add eye icon</p>
    @endif --}}
</div>