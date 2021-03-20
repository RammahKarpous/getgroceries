<div class="wrapper" x-data="{ isSearching: false }">
    <div class="search form">
        <input type="text" class="form__input form__input--text" wire:model="query" placeholder="type to start searching.">
        <a href="#" class="clear" wire:click.prevent="clearSearch"><livewire:icon icon="plus" colour="black"></a>
    </div>

    <ul class="results">

    </ul>
</div>
