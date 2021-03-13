<div class="form__group">
    @if ($type == 'text' || $type == 'email' || $type == 'password')
        <label for="{{ $for }}">{{ $label }}</label>
        <input type="{{ $type }}" id="{{ $for }}" name="{{ $for }}" class="form__input form__input--{{ $type }}" value="{{ $value }}">
    @endif

    @if ($type == 'file')
        <label for="{{ $for }}" class="form__picture-wrapper">
            <img src="{{ 
                auth()->user()->profile_picture ? 
                asset('storage/users/' . auth()->user()->profile_picture) : 
                asset('images/default-profile-picture.svg')}}" alt="current user profile picture">

            Upload image
        </label>
        <input type="{{ $type }}" id="{{ $for }}" name="{{ $for }}" class="form__input form__input--{{ $type }}" value="{{ $value }}">
    @endif

    @error($for)
        <small> {{ $message }} </small>
    @enderror
</div>