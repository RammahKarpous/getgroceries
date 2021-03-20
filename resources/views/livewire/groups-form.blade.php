<form class="form" wire:submit.prevent="addGroup">
    @if ($success)
        <p class="toast toast--success">{{ $success }}</p>
    @endif

    <div class="form__group">
        <label for="name">Name</label>
        <input type="text" wire:model.debounce.500ms="name" class="form__input form__input--text" name="name" id="name">
        @error('name') <p class="message message--error"> {{ $message }} </p> @enderror
    </div>

    <div class="form__group">
        <button class="button button--primary mt-20" type="submit">Add group</button>
    </div>
</form>