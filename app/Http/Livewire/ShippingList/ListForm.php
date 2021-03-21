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

        $list = ShoppingList::create([
            'name' => $this->name,
            'uuid' => Str::random(),
            'group_id' => $this->group,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('list.show', $list);
    }

    public function render()
    {
        return view('livewire.shipping-list.list-form');
    }
}