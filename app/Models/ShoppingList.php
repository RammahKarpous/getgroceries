<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'uuid', 'group_id', 'user_id'];

    public function group()
    {
        return $this->belongsTo(Group::class, 'id', 'group_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}