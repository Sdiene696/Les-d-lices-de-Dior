<?php

namespace App\Http\Controllers;

use App\Models\Gerants;
use Illuminate\Http\Request;

class GerantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gerants=gerants::all();
        return view('gerants.index' ,compact('gerants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gerants.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gerant=new Gerant();
        $gerant->nom =$request->input('nom');
        $gerant->poste =$request->input('poste');
        $gerant->email =$request->input('email');
        $gerant->motdepasse =$request->input('motdepasse');
        $gerant->save();
        return redirect()->route('gerant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gerants $gerants)
    {
         return view('gerants.details' ,compact('gerant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gerants $gerants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gerants $gerants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gerants $gerants)
    {
        $gerant->delete();
        return redirect()->route('gerant.index');
    }
}
