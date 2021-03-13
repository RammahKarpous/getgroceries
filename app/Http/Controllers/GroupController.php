<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('groups.index');
    }

    public function show(Group $group)
    {
        return view('groups.show', [
            'group'=> $group
        ]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function addMember(Group $group)
    {
        return view('groups.add-member', [
            'group' => $group
        ]);
    }
}