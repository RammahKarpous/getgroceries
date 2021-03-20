<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function message()
    {
        return $this->hasOne(Message::class, 'id', 'message_if');
    }
}