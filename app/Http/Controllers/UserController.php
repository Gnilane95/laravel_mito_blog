<?php

namespace App\Http\Controllers;

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
        return view('pages.all-users');
    }
}
