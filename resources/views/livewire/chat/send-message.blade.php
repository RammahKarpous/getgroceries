<div class="messages">
    @foreach ($messages as $message)
        <p class="{{ $message->user_id === auth()->user()->id ? 'sender_message' : 'reciever_message' }}">{{ $message->message }}</p>
        {{-- @foreach ($message->user as $user)
        @endforeach --}}
    @endforeach
</div>

<div class="chat__message-area">
    <button type="submit" class="chat__camera-icon button--icon"><livewire:icon icon="camera" colour="black" /></button>

    <textarea 
        name="message" 
        class="chat__textarea"
        wire:model.debounce.500ms="message"
        wire:keydown.enter="saveMessage({{ $roomId }})"
    >
    
    </textarea>

    <button type="submit" wire:click="saveMessage({{ $roomId }})" class="chat__send-icon button--icon"><livewire:icon icon="send" colour="black" /></button>
</div>
