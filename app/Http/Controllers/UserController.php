<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
    * Return all users view
    *
    * @return void
    */
    public function allUsers()
    {
        $users = User::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.all-users', compact('users'));
    }
}
