<?php

namespace App\Http\Controllers;

use App\Models\Livreurs;
use Illuminate\Http\Request;

class LivreursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livreurs=livreurs::all();
        return view('livreurs.index' ,compact('livreurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livreurs.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livreur=new Livreurs();
        $livreur->nom =$request->input('nom');
        $livreur->prenom =$request->input('prenom');
        $livreur->telephone =$request->input('telephone');
        $livreur->statut =$request->input('statut');
        $livreur->save();
        return redirect()->route('livreurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livreurs $livreur)
    {
        return view('livreurs.details' ,compact('livreur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livreurs $livreurs)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livreurs $livreurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livreurs $livreurs)
    {
        $livreur->delete();
        return redirect()->route('livreur.index');
    }
}
