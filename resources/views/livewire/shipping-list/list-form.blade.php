<div class="wrapper">
    <form wire:submit.prevent="addList">
        <div class="form__group">
            <label for="name" class="form__label">Name</label>
            <input type="text" id="name" wire:model.debounce.500ms="name" class="form__input form__input--text">
        </div>
        
        <div class="form__group">
            <select name="group" id="group" wire:model="group" class="form__input form__input--text">
                <option selected="selected">Please select a group</option>
                @if (count(auth()->user()->groups) > 0)
                    @foreach (auth()->user()->groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                @else
                    <option>There are no shopping lists</option>
                @endif
            </select>
            @error('group') <p class="message--error">Please select a group</p>@enderror
        </div>

        <div class="form__group">
            <label for="withoutGroup" x-data="{ isChecked: true }" class="form__label form__label--checkbox" x-in:click="isChecked = !isChecked">
                <template x-if="true"><img class="checkbox" src="{{ asset('images/icons/checkbox-empty.png') }}" /></template>
                <template x-if="false"><img class="checkbox" src="{{ asset('images/icons/checkbox-checked.png') }}" /></template>
                Continue without group
            </label>

            <input type="checkbox" name="withoutGroup" wire:model="withoutGroup" class="form__input form__input--" id="withoutGroup">
        </div>

        <div class="form__group">
            <input type="submit" class="button button--primary" value="Create list">
        </div>
    </form>
</div>
