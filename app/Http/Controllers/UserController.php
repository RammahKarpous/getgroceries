<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use App\Models\User;

class UserController extends Controller
{
    public function edit()
    {
        return view('auth.edit');
    }
}