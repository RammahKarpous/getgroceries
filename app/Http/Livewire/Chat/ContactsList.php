<?php

namespace App\Http\Livewire\Chat;

use App\Models\ChatRoom;
use App\Models\Group;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class ContactsList extends Component
{

    public $userId;

    public function createChat($userId)
    {

        $this->userId = $userId;
        
        $user = User::find($userId);
        $allRooms = ChatRoom::all();

        if ($user) {
            
            if (count($allRooms) > 0) {
                
                foreach ($allRooms as $room) {

                    if ($room->name === Str::random()) {
                        return redirect()->route('chats.show', $room->name);
                    } else {
                        $room = ChatRoom::create([
                            'name' => Str::random()
                        ]);

                    }
                }
            } else {                
                $room = ChatRoom::create([
                    'name' => Str::random()
                ]);

            }
        }
        
        return redirect()->route('chats.show', $room->name);
    }

    public function newChat($userId)
    {
        $this->userId = $userId;
    }

    public function render()
    {   
        return view('livewire.chat.contacts-list', [
            'groups' => Group::all(),
            'user' => $this->newChat($this->userId)
        ]);
    }
}