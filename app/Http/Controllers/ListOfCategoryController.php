<?php

namespace App\Http\Controllers;

use App\Models\ListOfCategory;
use Illuminate\Http\Request;

class ListOfCategoryController extends Controller
{
    public function index()
    {
        $categories = ListOfCategory::all(); //ou all ou paginate

        return view('pages.category', compact(('categories')));
    }

    /**
     * Store category in DB
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'category'=>'required|string|max:20|min:3',
        ]);
        // Stock form's values in variable
        $data = [
        'category' => $request->category,
        'created_at' => now(),
        ];
        //SEnd in DB with model of DB + create() method
        ListOfCategory::create($data);

        // Redirect
        return back()->with('status', 'Catégorie bien enregistrée');

    }
}
