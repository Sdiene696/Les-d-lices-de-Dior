<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=categories::all();
        return view('categories.index' ,compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.formulaire');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie=new Categories();
        $categorie->nom =$request->input('nom');
        $categorie->save();
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categorie)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categorie)
    {
         return view('categories.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categorie)
    {
        $categorie->nom =$request->input('nom');
        $categorie->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index');

    }
}
