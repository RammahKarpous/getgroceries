<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        return view('list.index');
    }

    public function create()
    {
        return view('list.create');
    }

    public function show(ShoppingList $list)
    {
        return view('list.show', [
            'list' => $list
        ]);
    }
}