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
     *
     * @param Request $request
     * @return void
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

    /**
     * delete category
     *
     * @param [int] $id
     * @return void
     */
    public function delete ($id)
    {
        $category = ListOfCategory::find($id);
        if (!$category){
            abort(404);
        }

        $category->delete();
        return back()->with('status','La catégorie est bien supprimée !');
    }

    /**
     * Send the view to edit form with th good category
     *
     * @param [int] $id
     * @return void
     */
    public function edit($id)
    {
        $category = ListOfCategory::find($id);
        return view('pages.update-category', compact('category'));
    }

    /**
     * Update the current category and store in DB
     *
     * @param Request $request
     * @param [int] $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        // get the good category with id
        $category = ListOfCategory::find($id);
        // Validate form with validate() method
        $request->validate([
        'category'=>'required|string|max:20|min:3',
        ]);

        // update in DB
        $category->update([
            'category'=>$request->category,
            'updated_at'=>now(),
        ]);
        return redirect()->route('categories.home')->with('status',"Categorie modifiée");

    }
    
}
