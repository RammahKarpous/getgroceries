<?php

namespace App\Http\Livewire\ShippingList;

use App\Models\ShoppingList;
use Livewire\Component;
use Illuminate\Support\Str;

class ListForm extends Component
{

    public $name;
    public $group;
    public $withoutGroup;

    public $success;

    public function addList()
    {

        if ($this->withoutGroup == null || $this->group == null) {
            
            $list = ShoppingList::create([
                'name' => $this->name,
                'uuid' => Str::random(),
                'user_id' => auth()->user()->id
            ]);
            
            $this->success = "Your list has been created";
        } else {
            $list = ShoppingList::create([
                'name' => $this->name,
                'uuid' => Str::random(),
                'group_id' => $this->group,
                'user_id' => auth()->user()->id
            ]);
            
            $this->success = "Your group list has been created";
        }


        return redirect()->route('list.show', $list);
    }

    public function render()
    {
        return view('livewire.shipping-list.list-form');
    }
}