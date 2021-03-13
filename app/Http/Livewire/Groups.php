<?php

namespace App\Http\Livewire;

use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Groups extends Component
{

    public $limit = 'none';

    public function delete($id)
    {
        $group_user = DB::table('group_user')->where('group_id', '=', $id);
        $group_user->delete();

        $group = Group::find($id);
        $group->delete();
    }

    public function render()
    {
        return view('livewire.groups', [
            'member' => Auth::user()
        ]);
    }
}