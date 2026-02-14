<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function show()
    {

        $user = User::all()->first();

        return view('user', compact('user'));
    }
}
