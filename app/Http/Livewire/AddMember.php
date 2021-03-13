<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddMember extends Component
{
    public $email;
    public $permission;
    public $group;
    public $success;
    public $notFound;

    public function addMember()
    {
        $user = User::where('email', '=', $this->email)->first();

        if ($user == null) {
            $this->notFound = 'The person that you are trying to add hasn\'t been found.';
        } else {
            
            DB::table('group_user')->insert([
                'user_id' => $user->id,
                'group_id' => $this->group,
                'role' => 'member',
                'permission' => $this->permission
            ]);
            
            $this->reset(['email', 'permission']);
            $this->notFound = '';
            $this->success = 'You have successfully added a new member';
        }
    }

    public function permissions()
    {
        return [
            [
                'permission' => 'full_control',
                'description' => 'Member can add and remove group members and lists'
            ],
            [
                'permission' => 'groceries_list_control',
                'description' => 'Member can only add and remove grocery lists'
            ],
            [
                'permission' => 'members_control',
                'description' => 'Member can only add and remove members'
            ],
            [
                'permission' => 'view_only',
                'description' => 'Member can only view lists and members, but he/she can check off products within a list.'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.add-member', [
            'members' => Group::all(),
            'permissions' => $this->permissions()
        ]);
    }
}