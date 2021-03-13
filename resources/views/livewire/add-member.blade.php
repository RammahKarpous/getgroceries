<div>
    <form wire:submit.prevent="addMember">
        <div class="form__group">
            <label for="name">Email</label>
            <input type="text" wire:model="email" class="form__input form__input--text" name="email" id="email">
            @error('email') <p class="message--error"> {{ $message }} </p> @enderror
        </div>

        <input type="hidden" wire:model="{{ $group }}" name="group">

        <div class="form__group mt-20">
            <small>Permissions</small>
            @foreach ($permissions as $permission)
                <div>
                    <input
                        type="radio" 
                        wire:model="permission" 
                        class="form__input form__input--radio-button" 
                        name="permission" 
                        id="{{ $permission['permission'] }}" 
                        value="{{ $permission['permission'] }}">

                    <label for="{{ $permission['permission'] }}" class="radio-button">
                        <div class="radio-button__circle"><span class="inner-circle"></span></div>
                        <div class="radio-button__info">
                            <p class="radio-button__title">{{ str_replace('_', ' ', $permission['permission']) }}</p>
                            <small class="radio-button__description">{{ $permission['description'] }}</small>
                        </div>
                    </label>
                </div>
            @endforeach
        </div>

        <div class="form__group">
            <button class="button button--primary mt-20" type="submit">Add member</button>
        </div>
    </form>

    <div class="wrapper">
        @if ($success)
            <p class="toast toast--success">{{ $success }}</p>
        @endif

        @if ($notFound)
            <p class="toast toast--warning">{{ $notFound }}</p>
        @endif
    </div>
</div>
