<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index()
    {
        $arrs = ["Toto", "Toti"];
        $arrGames = ["Fifa", "Pepa Pig"];
        return view('pages.home', compact("arrs", "arrGames"));
    }
    public function about()
    {
        return view('pages.about');
    }
}
