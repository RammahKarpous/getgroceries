<?php

namespace App\Http\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChatRoom extends Component
{    
    use WithFileUploads;

    public $messages = [];
    public $roomId;
    public $message = '';
    // public $images = [];
    
    protected $rules = [
        'message' => 'required'
        // 'images' => 'nullable'
    ];

    protected $listeners = [
        'save-message' => 'saveMessage'
    ];

    public function saveMessage($roomId)
    {
        
        // $this->validate();
        
        $this->roomId = $roomId;

        Message::create([
            'chat_room_id' => $roomId,
            'user_id' => auth()->user()->id,
            'message' => $this->message,
        ]);

        $this->reset(['message']);
    }
    
    public function render()
    {
        return view('livewire.chat.chat-room');
    }
}