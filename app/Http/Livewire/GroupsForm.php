<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class GroupsForm extends Component
{

    public $message = "Hello world!";

    public $group_id;

    public $name;
    public $success;

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function addGroup()
    {
        $this->validate();

        $group = Group::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'uuid' => Str::uuid()
        ]);

        DB::table('group_user')->insert([
            'user_id' => auth()->user()->id,
            'group_id' => $group->id,
            'role' => 'creator',
            'permission' => 'full_control'
        ]);

        $this->reset(['name']);
        $this->success = 'Your group has been added';
    }

    public function render()
    {
        return view('livewire.groups-form', [
            'groups' => Group::all()
        ]);
    }
}