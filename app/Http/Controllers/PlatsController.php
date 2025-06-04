<?php

namespace App\Http\Controllers;

use App\Models\Plats;
use App\Models\Categories;


use Illuminate\Http\Request;

class PlatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats=plats::all();
        return view('plats.index' ,compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories=categories::all();
        return view('plats.formulaire',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plat=new Plats();
        $plat->nom =$request->input('nom');
        $plat->image =$request->input('image');
        $plat->description =$request->input('description');
        $plat->prix =$request->input('prix');
        $plat->stock =$request->input('stock');
        $plat->statut =$request->input('statut');
        $plat->categories_id =$request->input('categories_id');
        $plat->save();
        return redirect()->route('plats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plats $plat)
    {   
        
        return view('plats.details' ,compact('plat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plats $plat)
    {    
        $categories=categories::all();
         return view('plats.edit',compact('categories'),compact('plat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plats $plat)
    {
        $plat->nom =$request->input('nom');
        $plat->image =$request->input('image');
        $plat->description =$request->input('description');
        $plat->prix =$request->input('prix');
        $plat->stock =$request->input('stock');
        $plat->statut =$request->input('statut');
        $plat->categories_id =$request->input('categories_id');
        $plat->save();
        return redirect()->route('plats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Plats $plat)
    {
        $plat->delete();
        return redirect()->route('plats.index');
    }
}
