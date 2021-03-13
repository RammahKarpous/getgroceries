<?php

namespace App\Http\Livewire;

use App\Models\Group;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Members extends Component
{

    public $model = '';
    public $group_id;

    public function removeMember($user_id, $group_id)
    {        
        $group_user = DB::table('group_user')->where('user_id', '=', $user_id, 'AND', 'group_id', '=', $group_id);
        $group_user->delete();
    }

    public function render()
    {
        return view('livewire.members', [
            'group' => Group::find($this->model)
        ]);
    }
}