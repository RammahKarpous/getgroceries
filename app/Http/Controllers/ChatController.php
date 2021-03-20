<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }

    public function show(ChatRoom $room)
    {
        return view('chat.show', [
            'room' => $room
        ]);
    }
}