<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'uuid'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function shoppingLists()
    {
        return $this->hasMany(ShoppingList::class);
    }
}