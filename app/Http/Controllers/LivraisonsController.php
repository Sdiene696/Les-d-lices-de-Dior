<?php

namespace App\Http\Controllers;

use App\Models\Livraisons;
use App\Models\Livreurs;
use App\Models\Clients;
use Illuminate\Http\Request;

class LivraisonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livraisons=livraisons::all();
        return view('livraisons.index' ,compact('livraisons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $users=users::all();
        return view('livraisons.formulaire',compact('users'));
        $livreurs=livreurs::all();
        return view('livraisons.formulaire',compact('livreurs'));
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livraison=new Livraison();
        $livraison->date =$request->input('date');
        $livraison->users_id =$request->input('users_id');
        $livraison->livreurs_id =$request->input('livreurs_id');
        $livraison->save();
        return redirect()->route('livraisons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livraisons $livraison)
    {
        return view('livraisons.details' ,compact('livraison'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livraisons $livraisons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livraisons $livraisons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livraisons $livraisons)
    {
        $livraison->delete();
        return redirect()->route('livraison.index');
    }
}
